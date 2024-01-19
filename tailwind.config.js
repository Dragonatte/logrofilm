/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: [ './web/**/*.html' ],
  theme: {
    screens: {
      mobil: '360px',
      tablet: '768px',
      desktop: '1024px',
    },
    colors: {
      "black": "#000",
      "white": "#FFF",
      "transparent": "transparent",
      "gray": {
        "100": "#F5F5F5",
        "200": "#E5E5E5",
        "300": "#CCCCCC",
        "400": "#B2B2B2",
        "500": "#999999",
        "600": "#7F7F7F",
        "700": "#666666",
        "800": "#4C4C4C",
        "900": "#333333"
      },
      "default": {
        "100": "#D7F3F9",
        "200": "#B1E5F4",
        "300": "#83C5DF",
        "400": "#5D9DBF",
        "500": "#2F6C95",
        "600": "#225480",
        "700": "#173F6B",
        "800": "#0E2D56",
        "900": "#091F47"
      },
      "primary": {
        "100": "#D7E4FE",
        "200": "#AFC8FE",
        "300": "#88A9FD",
        "400": "#6A8FFB",
        "500": "#3966F9",
        "600": "#294DD6",
        "700": "#1C38B3",
        "800": "#122690",
        "900": "#0A1977"
      },
      "secondary": {
        "100": "#FDDAD4",
        "200": "#FBAFAA",
        "300": "#F37E82",
        "400": "#E75C6F",
        "500": "#D82B53",
        "600": "#B91F51",
        "700": "#9B154E",
        "800": "#7D0D47",
        "900": "#670842"
      },
      "tertiary": {
      "100": "#FFF3CE",
      "200": "#FFE39C",
      "300": "#FFD06C",
      "400": "#FFBC47",
      "500": "#FF9D0A",
      "600": "#DB7D07",
      "700": "#B76105",
      "800": "#934803",
      "900": "#7A3601"
      },
      "quaternary": {
        "100": "#DBFAD4",
        "200": "#B2F6AA",
        "300": "#7CE57B",
        "400": "#56CC60",
        "500": "#27AA3F",
        "600": "#1C923D",
        "700": "#137A39",
        "800": "#0C6234",
        "900": "#075131"
      }
    },
    fontFamily: {
      'sans': ['Roboto', 'sans-serif'],
      'serif': ['Roboto Slab', 'serif'],
      'mono': ['Roboto Mono', 'monospace'],
      'display': ['Montserrat', 'sans-serif'],
    },
    extend: {},
  },
  plugins: [],
}
