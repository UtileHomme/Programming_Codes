// const request = require("request");

const geocode = require('./utils/geocode');
const forecast = require('./utils/forecast');

const address = process.argv[2];

if(!address)
{
  console.log('Please provide an address');
}
else
{
  geocode(address, (error, {latitude, longitude, location} = {}) => {

    // console.log('we have entered this');
    if(error)
    {
      console.log('this gets called');
      return console.log(error);
    }

    forecast(latitude, longitude, (forecastError, forecastData) => {

      console.log(location);
      console.log(forecastData);
      });
});
}

// const url =
//   "http://api.weatherstack.com/current?access_key=96290e3082e7c20ab97473df6a4f443f&query=37.8267,-122.4233&units=f";

// request({ url: url, json: true }, (error, response) => {
//   //   console.log(response.body.current);

//   if(error)
//   {
//     console.log('Unable to connect to weather service');
//   }
//   else if(response.body.error)
//   {
//     console.log('Unable to find location');
//   }
//   else
//   {
//     console.log(
//       response.body.current.weather_descriptions[0] +
//         ". It is currently " +
//         response.body.current.temperature +
//         " degrees out. There is a " +
//         response.body.current.feelslike +
//         "% chance of rain."
//     );
//   }

// });

//Geocoding

// const geocodeURL = 'https://api.mapbox.com/geocoding/v5/mapbox.places/philadelphia.json?access_token=pk.eyJ1IjoidXRpbGVob21tZSIsImEiOiJja2czYTFubHowOG85MzZyMmh1OTdubmttIn0.Bqtk0fzxXG1G7FqVu_ODrg';

// request({url: geocodeURL, json: true}, (error, response) =>
//   {
//     if(error)
//     {
//       console.log('Unable to connect to location services!');
//     }
//     else if(response.body.features.length === 0)
//     {
//       console.log('Unable to find location. Try Another search');
//     }
//     else
//     {
//       const latitude = response.body.features[0].center[0];
//       const longitude = response.body.features[0].center[1];
//       console.log(latitude, longitude);
//     }

//   });

// geocode('Boston', (error, data) => {
//     console.log('Error' , error);
//     console.log('Data', data);
// });


// forecast(-71.0596, 42.3605, (error, data) => {
//   console.log('Error', error);
//   console.log('Data', data);
// });




