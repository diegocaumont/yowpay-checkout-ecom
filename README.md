# YowPay Checkout Integration

![QR SEPA Payment Solution](https://github.com/diegocaumont/yowpay_checkout_ecom/blob/main/banner.jpg)

## Overview

This guide provides essential information for integrating the YowPay Checkout system into an e-commerce platform. It covers backend and frontend integration points, focusing on generating payment links and handling payment responses.

## Structure

- **Backend Logic**: Contains PHP scripts for generating payment links and interacting with the YowPay API.
- **Frontend Pages**: Includes user-facing pages for initiating transactions and handling success or cancellation responses.

### Backend Components

- `generateInvoice.php`: Main script for generating a YowPay payment link.
- `yowpayApi.php`: Wrapper class for YowPay API interactions, including signature generation.

### Frontend Components

- `index.php`: Entry point for users to initiate a purchase.
- `success.html` and `cancel.html`: Pages displayed to users upon successful or cancelled transactions, respectively.

## Key Functionalities

### Payment Link Generation

The `generateInvoice.php` script is responsible for creating a payment link. It requires transaction details such as amount, currency, order ID, and language. This script uses the [YowPayApi](file:///c%3A/Users/Diego/Documents/yowpay/public_template/ecom_yowpay_checkout/generateInvoice.php#17%2C13-17%2C13) class to generate a secure signature and constructs the payment URL with necessary query parameters.

### API Wrapper

The `yowpayApi.php` file contains the [YowPayApi](file:///c%3A/Users/Diego/Documents/yowpay/public_template/ecom_yowpay_checkout/generateInvoice.php#17%2C13-17%2C13) class, which facilitates secure communication with YowPay's API. It includes methods for signature generation and making API calls.

## Getting Started

1. **Configure API Credentials**: Replace `'APP_TOKEN'` and `'APP_SECRET_KEY'` in `generateInvoice.php` with your actual YowPay credentials.
2. **Set Up Frontend**: Customize `index.php` to match your product or service offerings.
3. **Handle Responses**: Ensure `success.html` and `cancel.html` are set up to provide appropriate feedback to your customers.

## Security Note

The provided code snippets include placeholders for sensitive data ([APP_TOKEN](file:///c%3A/Users/Diego/Documents/yowpay/public_template/ecom_yowpay_checkout/generateInvoice.php#5%2C15-5%2C15), [APP_SECRET_KEY](file:///c%3A/Users/Diego/Documents/yowpay/public_template/ecom_yowpay_checkout/generateInvoice.php#6%2C16-6%2C16)). In a production environment, it's crucial to secure these credentials properly. Avoid hardcoding them directly in your codebase. Consider using environment variables or secure configuration files.

## Conclusion

This README outlines the basic setup for integrating YowPay Checkout into an e-commerce platform. For detailed API documentation or further assistance, refer to YowPay's official documentation or contact their support team.
