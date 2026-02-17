const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const mjml2html = require("mjml");

module.exports = {
	devtool: 'source-map',
	mode: 'production',
	entry: {
		main:'./assets/src/js/main.js',
		home:'./assets/src/js/pages/home/home.js',
	},
	output: {
		filename: '[name].[contenthash].js',
		path: path.resolve(__dirname, 'assets/dist'),
		clean: true,
	},
	module: {
		rules: [
			{
				test: /\.css$/i,
				use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader'],
			},
			{
				test: /\.(scss|sass)$/i,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'postcss-loader',
					'sass-loader',
				],
			},
			{
				test: /\.(png|jpe?g|gif|svg|webp)$/i,
				type: 'asset/resource',
				generator: {
					filename: 'images/[name][ext]',
				},
			},
			{
				test: /\.(woff(2)?|ttf|eot|otf)$/i,
				type: 'asset/resource',
				generator: {
					filename: 'fonts/[name][ext]',
				},
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: '[name].[contenthash].css',
		}),
		new CopyPlugin({
			patterns: [
				{ from: 'assets/src/images', to: 'images' },
				{ from: 'assets/src/fonts', to: 'fonts' },
				{
					from: path.resolve(__dirname, 'assets/src/email'),
					context: path.resolve(__dirname, 'assets/src/email'),
					to({ absoluteFilename }) {
						// change extension from .mjml → .html
						return path.join(
							'email',
							path.basename(absoluteFilename, '.mjml') + '.html'
						);
					},
					globOptions: { ignore: ['**/*.html'] },
					transform(content, absoluteFrom) {
						const mjml2html = require('mjml');
						const { html, errors } = mjml2html(content.toString(), { minify: true });
						if (errors && errors.length) {
							throw new Error(`MJML error in ${absoluteFrom}:\n${JSON.stringify(errors, null, 2)}`);
						}
						return Buffer.from(html);
					},
					toType: 'file',
				},
			],

		}),
	],
	optimization: {
		minimize: true,
		minimizer: [
			new TerserPlugin(),
			new CssMinimizerPlugin(),
		],
	},
	resolve: {
		extensions: ['.js', '.scss', '.css'],
		alias: {
			'@': path.resolve(__dirname, 'assets/src'),
		},
	},
};
