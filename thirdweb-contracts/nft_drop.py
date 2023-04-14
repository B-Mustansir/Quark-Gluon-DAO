from thirdweb import ThirdwebSDK

# You can create a new instance of the SDK to use by just passing in a network name
sdk = ThirdwebSDK("mumbai")

from thirdweb import ThirdwebSDK

# Set your RPC_URL
RPC_URL = "https://rpc-mainnet.matic.network"

# And now you can instantiate the SDK with it
sdk = ThirdwebSDK(RPC_URL)

# Add your NFT Collection contract address here
NFT_COLLECTION_ADDRESS = "0x.."

# And you can instantiate your contract with just one line
nft_collection = sdk.get_nft_collection(NFT_COLLECTION_ADDRESS)

# Now you can use any of the read-only SDK contract functions
nfts = nft_collection.get_all()
print(nfts)

