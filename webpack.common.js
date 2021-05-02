const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
	entry: {
		"codersrank-activity": './assets/src/js/codersrank-activity.js',
	},
	plugins: [
		new CleanWebpackPlugin(),
	],
	output: {
		path: path.resolve(__dirname, 'assets/dist/js/'),
		filename: '[name].js',
	}
};
