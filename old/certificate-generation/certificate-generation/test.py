import sys
from PIL import Image, ImageFont, ImageDraw



# Global Variables
FONT_FILE = ImageFont.truetype(r'certificate-generation/certificate-generation/font/RobotoSlab-Regular.ttf', 200)
FONT_FILE1 = ImageFont.truetype(r'certificate-generation/certificate-generation/font/RobotoSlab-Regular.ttf', 180)
FONT_FILE2 = ImageFont.truetype(r'certificate-generation/certificate-generation/font/OpenSans-Regular.ttf', 40)
FONT_FILE3 = ImageFont.truetype(r'certificate-generation/certificate-generation/font/RobotoSlab-Regular.ttf', 40)
FONT_COLOR = "#000000"

template = Image.open(r'certificate-generation/certificate-generation/quarktemplate.png')
WIDTH, HEIGHT = template.size
# print(WIDTH,HEIGHT)

    #      # Get the arguments
    # arg1 = sys.argv[1]
    # arg2 = sys.argv[2]

    # # Call your function with the arguments
    # def your_function(arg1, arg2):
    #     # Your code here
    #     print(arg1)
    #     print(arg2)

    # your_function(arg1, arg2)
   

arg1 = [str(sys.argv[1])]
paragraph = "AASSKKN ADK A AJSK A KASKJ KNiNUbf kae IIQij lwIAslD"
logo ="C:/xampp/htdocs/Quark/Hackathon/certificate-generation/certificate-generation/quark.png"

sig_1 = "C:/xampp/htdocs/Quark/Hackathon/certificate-generation/certificate-generation/Signature_1.jpeg"
head_1 = "Raju"
designation_1 ="Club Head"

sig_2 = "C:/xampp/htdocs/Quark/Hackathon/certificate-generation/certificate-generation/Signature_1.jpeg"
head_2 = "ayran"
designation_2 = "code Head"


def make_certificates(name,text,logo,sig_1,head_1,designation_1,sig_2,head_2,designation_2):

    '''Function to save certificates as a .png file'''
    image_source = Image.open('C:/xampp/htdocs/Quark-Gluon-DAO/certificate-generation/certificate-generation/quarktemplate.png')
    

    

    #Logo priniting 
    image_2 = Image.open(logo)
    image_2 = image_2.resize((150, 250))
    box = (1635, 120)
    image_source.paste(image_2, box)


   # arg2 = 22
    draw = ImageDraw.Draw(image_source)



    # Finding the width and height of the text. 
    name_width, name_height = draw.textsize(name, font=FONT_FILE)
    text_width, text_height = draw.textsize(text, font=FONT_FILE2)

    

    # Placing it in the center, then making some adjustments.
    draw.text(((WIDTH - name_width) / 2, (HEIGHT - name_height-250) / 2 + 10), name, fill=FONT_COLOR, font=FONT_FILE)

    # Certificate txt
    draw.text(((WIDTH - text_width) / 2, (HEIGHT - name_height-250) / 2 + name_height + 60), text, fill=FONT_COLOR, font=FONT_FILE2, align="center")
    
    # Signature 1 
    image_sig_1 = Image.open(sig_1)
    image_sig_1 = image_sig_1.resize((350, 160))
    box = (460, 1000)
    image_source.paste(image_sig_1, box)


    # Signer Name 1
    text_width, _ = draw.textsize(head_1, font=FONT_FILE3)
    center_point = 636
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1160), head_1, fill=FONT_COLOR, font=FONT_FILE3)

    

    # Designation 1
    text_width, _ = draw.textsize(designation_1, font=FONT_FILE3)
    center_point = 636
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1220), designation_1, fill=FONT_COLOR, font=FONT_FILE3)

    # Signature 2 
    image_sig_2 = Image.open(sig_2)
    image_sig_2 = image_sig_2.resize((350, 160))
    box = (1275, 1000)
    image_source.paste(image_sig_2, box)
    

    # Signer Name 2
    text_width, _ = draw.textsize(head_2, font=FONT_FILE3)
    center_point = 1447
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1160), head_2, fill=FONT_COLOR, font=FONT_FILE3)

    # Designation 2
    text_width, _ = draw.textsize(designation_2, font=FONT_FILE3)
    center_point = 1447
    x_coordinate = center_point - (text_width/2)
    draw.text((x_coordinate,1220), designation_2, fill=FONT_COLOR, font=FONT_FILE3)

    # Saving the certificates in a different directory.
    image_source.save("C:/xampp/htdocs/Quark-Gluon-DAO/certificate-generation/certificate-generation/out/" + name +".png")
    # print('Saving Certificate of:', name)     


def split_sentence(sentence):
    words = sentence.split()  # split the sentence into individual words
    words_count = len(words)  # return the number of words
    new_paragraph = ""
    for i, word in enumerate(words):
        if i % (int(words_count/3)) == 0 and i != 0:  # add a newline character after every xth word, except the first
            new_paragraph += "\n"
        new_paragraph += word + " "
    return new_paragraph

make_certificates(arg1[0],split_sentence(paragraph),logo,sig_1,head_1,designation_1,sig_2,head_2,designation_2)
print("hi")
# print(len(names), "certificates done.")

