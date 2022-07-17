const colors = require("tailwindcss/colors");

module.exports = {
	content: ["./src/**/*.{vue,js,ts,jsx,tsx}"],
	theme: {
		extend: {
			colors: {
				orange: {
					100: "#ffc074",
					200: "#ffa336",
					400: "#ff8b00",
					600: "#be6700",
					800: "#532d00",
				},
				white: colors.white,
				gray: colors.gray,
				blue: {
					100: "#72c1ec",
					200: "#359cd3",
					400: "#097fbe",
					600: "#055079",
					800: "#022335",
				},
				green: {
					100: "#b9fa72",
					200: "#97f334",
					400: "#7cee00",
					600: "#59ac00",
					800: "#274b00",
				},
				red: {
					100: "#f871a3",
					200: "#ef3379",
					400: "#e80056",
					600: "#a5003d",
					800: "#48001b",
				},
				yellow: colors.yellow,
			},
		},
	},
	plugins: [],
};
