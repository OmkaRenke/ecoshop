# Astra Child Theme
## Updates

- **v1.0.0**: Initial release with custom filters, product shortcode.


## Overview
This project is a custom child theme built on top of the popular Astra theme for WordPress. It includes custom functionality and filtering products by sustainability rating.

## Installation

### Prerequisites
- WordPress installation
- Astra parent theme installed and activated
- WooCommerce plugin installed and activated

### Steps to Install

#### 1. Download the Astra Child Theme:
- Download or clone this repository to your local machine.

#### 2. Upload to WordPress:
- Go to your WordPress dashboard.
- Navigate to **Appearance > Themes**.
- Click on **Add New** and then **Upload Theme**.
- Upload the zipped child theme or upload the unzipped folder via FTP to the `/wp-content/themes/` directory.

#### 3. Activate the Child Theme:
- After uploading, activate the Astra Child Theme from the WordPress dashboard under **Appearance > Themes**.

## Functionality Added


### 1. Shortcode for Displaying Products:
A custom shortcode `[display_products]` has been created to display a grid of four products anywhere on your site. This grid is responsive and styled according to the child theme.


## Functionality Code Overview

### 1. Custom Filters:
- Added via the `pre_get_posts` action hook, allowing users to filter products .
- Filters include dropdowns for sustainability rating.

### 2. Shortcode for Products:
- The `[display_products]` shortcode renders a grid of four products with their images, titles, and prices.


## File Structure

```bash
/astra-child
├── functions.php       # Contains custom functions for WooCommerce filters and shortcode.
├── style.css           # Custom styles for the child theme.
