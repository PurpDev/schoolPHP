// Importing libraries
import { ThirdwebSDK } from "a3rdweb/sdk"
import { ethers } from "ethers"
// Importing private key
require('dotenv').config()
// Instantiate 3rdweb SDK
    const sdk = new ThirdwebSDK (
    new ethers. Wallet(
    // Your wallet private key
    // process.env.PRIVATE_KEY as string,
    // RPC URL
    ethers.getDefaultProvider("https://rinkeby-light.eth.linkpool.io/")
    )
    );
// Instantiate NET module
const nft = sdk.getNFTModule("OxD9b0403529471515F16DA32eee652c0a6cECBA78");
// Minting the NFT
async function mint() {
console.log(await nft.mint({
name: 'Hi',
description: 'If you are interested in... follow me',
image: "https://i.imgur.com/ryIM261.png",
properties: {},
}))
}


mint()