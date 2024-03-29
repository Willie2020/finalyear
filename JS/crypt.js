const CryptoJS = require("crypto-js");

const encryptWithAES = (text) => {
  const passphrase = "123";
  return CryptoJS.AES.encrypt(text, passphrase).toString();
};

const decryptWithAES = (ciphertext) => {
  const passphrase = "123";
  const bytes = CryptoJS.AES.decrypt(ciphertext, passphrase);
  const originalText = bytes.toString(CryptoJS.enc.Utf8);
  return originalText;
};

let password = "helloworld";
let encryptedPassword = encryptWithAES(password);
let decryptedPassword = decryptWithAES(encryptedPassword);

console.log(`Encrypted password: ${encryptedPassword}`);
console.log(`Decrypted password: ${decryptedPassword}`);