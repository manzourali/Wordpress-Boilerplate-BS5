module.exports = {
  plugins: {
    'postcss-rtl': {},    // Convert LTR to RTL
    autoprefixer: {},     // Add browser-specific prefixes
    cssnano: {            // Minify the output
      preset: 'default'
    }
  }
};
