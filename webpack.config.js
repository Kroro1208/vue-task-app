const webpack = require('webpack');

module.exports = {
    plugins: [
        new webpack.ProvidePlugin({
            global: require.resolve('./global-polyfill.js'),
        }),
    ],
};
