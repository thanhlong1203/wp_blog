const colors = require("tailwindcss/colors");

module.exports = {
  mode: "jit",
  purge: {
    content: [
      "./src/**/*.php",
      "./template-parts/**/*.php",
      "./*.php",
      "./inc/**/*.php",
      "./inc/*.php",
      "./blocks/*.php",
      "./src/**/*.js",
      "./search-filter/**/*.php"
    ]
  },
  theme: {
  },
};
