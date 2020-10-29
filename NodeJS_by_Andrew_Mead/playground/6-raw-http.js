const http = require('http');

const url = "http://api.weatherstack.com/current?access_key=96290e3082e7c20ab97473df6a4f443f&query="+"45,-75"+ "&units=f";

const request = http.request(url, (response) => {

    let data = '';
    response.on('data', (chunk) => {
        data = data + chunk.toString();
        console.log(data);
    });

    response.on('end', () => {
        const body = JSON.parse(data);
        console.log(body);
    });
});

request.on('error', (error) => {
    console.log('An error', error);
});

request.end();