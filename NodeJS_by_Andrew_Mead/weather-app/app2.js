const request = require("request");

const url =
  "http://api.weatherstack.com/current?access_key=96290e3082e7c20ab97473df6a4f443f&query=37.8267,-122.4233&units=f";

request({ url: url, json: true }, (error, response) => {
  //   console.log(response.body.current);

  console.log(
    response.body.current.weather_descriptions[0] +
      ". It is currently " +
      response.body.current.temperature +
      " degrees out. There is a " +
      response.body.current.feelslike +
      "% chance of rain."
  );
});
