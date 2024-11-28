# YOURLS-Custom-Header

This plugin allows the addition of a custom header to the generated URL, enabling compliance with specific regulatory requirements in certain countries, such as India, for bulk SMS services.

## How It Works

To add a custom header as a prefix to the generated short URL, pass the `custom_header` as a query parameter.

### Example 1: With Keyword

If the keyword is `test` and the `custom_header` is `SMS/`, the generated URL will look like this:

www.example.com/SMS/test


### Example 2: Without Keyword

If the keyword is not provided and the `custom_header` is `SMS/`, the generated URL will look like this:

www.example.com/SMS/random_generated_keyword



## Usage

1. Add the plugin to your YOURLS setup and activate it.
2. Configure the `custom_header` parameter as needed in your URL generation process.
3. Use the generated short URL with the custom header as a prefix.
