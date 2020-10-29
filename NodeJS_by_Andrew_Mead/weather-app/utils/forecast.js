const request = require('request');

const forecast = (latitude, longitude, callback) => {
    const url = "http://api.weatherstack.com/current?access_key=96290e3082e7c20ab97473df6a4f443f&query="+"42.3605,-71.0596"+ "&units=f";

    request({url, json: true} , (error, {body})=> {
        if(error)
        {
            callback('Unable to connect to weather service!', undefined);
        }
        else if(body.error)
        {
            callback('Unable to find location', undefined);
        }
        else
        {
            // console.log('this gets called');
            callback('undefined', body.current.weather_descriptions[0] + ". It is currently " + body.current.temperature + " degrees out. There is a " + body.current.feelslike + "% chance of rain.");
        }
    });
};

module.exports = forecast;