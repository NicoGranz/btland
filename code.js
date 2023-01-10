//main.js
const form = document.querySelector('form');
form.addEventListener('submit', event => {
    event.preventDefault();

    const tezosWalletAddress = document.querySelector('#tezos-wallet-address').value;
    console.log(tezosWalletAddress);

    // Send the tezosWalletAddress to the server using an AJAX request, or
    // do whatever else you need to do with the user's input.
});