from PIL import Image, ImageFont, ImageDraw

# Global Variables
FONT_FILE = ImageFont.truetype(r'font/GreatVibes-Regular.ttf', 200)
FONT_FILE1 = ImageFont.truetype(r'font/RobotoSlab-Regular.ttf', 180)
FONT_FILE2 = ImageFont.truetype(r'font/OpenSans-Regular.ttf', 40)
FONT_FILE3 = ImageFont.truetype(r'font/RobotoSlab-Regular.ttf', 40)
FONT_COLOR = "#000000"

template = Image.open(r'quarktemplate.png')
WIDTH, HEIGHT = template.size
print(WIDTH,HEIGHT)

def make_certificates(name,text):
    '''Function to save certificates as a .png file'''
    image_source = Image.open(r'quarktemplate.png')
    
    #Logo priniting 
    image_2 = Image.open("quark.png")
    image_2 = image_2.resize((150, 250))
    box = (1635, 120)
    image_source.paste(image_2, box)

    
    draw = ImageDraw.Draw(image_source)

    # Finding the width and height of the text. 
    name_width, name_height = draw.textsize(name, font=FONT_FILE)
    text_width, text_height = draw.textsize(text, font=FONT_FILE2)

    # Placing it in the center, then making some adjustments.
    draw.text(((WIDTH - name_width) / 2, (HEIGHT - name_height-250) / 2 + 10), name, fill=FONT_COLOR, font=FONT_FILE)

    # Certificate txt
    draw.text(((WIDTH - text_width) / 2, (HEIGHT - name_height-250) / 2 + name_height + 60), text, fill=FONT_COLOR, font=FONT_FILE2, align="center")
    
    # Signature 1 
    image_sig_1 = Image.open("Signature_1.jpeg")
    image_sig_1 = image_sig_1.resize((350, 160))
    box = (460, 1000)
    image_source.paste(image_sig_1, box)

    # Signer Name 1
    text_width, _ = draw.textsize("Atharva", font=FONT_FILE3)
    center_point = 636
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1160), "Atharva", fill=FONT_COLOR, font=FONT_FILE3)

    # Designation 1
    text_width, _ = draw.textsize("Dean Academics", font=FONT_FILE3)
    center_point = 636
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1220), "Dean Academics", fill=FONT_COLOR, font=FONT_FILE3)

    # Signature 2 
    image_sig_1 = Image.open("Signature_1.jpeg")
    image_sig_1 = image_sig_1.resize((350, 160))
    box = (1275, 1000)
    image_source.paste(image_sig_1, box)

    # Signer Name 2
    text_width, _ = draw.textsize("Atharva", font=FONT_FILE3)
    center_point = 1447
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1160), "Atharva", fill=FONT_COLOR, font=FONT_FILE3)

    # Designation 2
    text_width, _ = draw.textsize("Dean Academics", font=FONT_FILE3)
    center_point = 1447
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1220), "Dean Academics", fill=FONT_COLOR, font=FONT_FILE3)

    # Saving the certificates in a different directory.
    image_source.save("./out/" + name +".png")
    print('Saving Certificate of:', name)        

def split_sentence(sentence):
    words = sentence.split()  # split the sentence into individual words
    words_count = len(words)  # return the number of words
    new_paragraph = ""
    for i, word in enumerate(words):
        if i % (int(words_count/3)) == 0 and i != 0:  # add a newline character after every xth word, except the first
            new_paragraph += "\n"
        new_paragraph += word + " "
    return new_paragraph

if __name__ == "__main__":

    names = ['Atharva Raut']
    paragraph = "for participation in something interesting, a 3-day tech event organized in month - year by this awesome community."

    for name in names:
        make_certificates(name,split_sentence(paragraph))

    print(len(names), "certificates done.")

