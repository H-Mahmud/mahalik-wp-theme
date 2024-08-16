# Mahalik WordPress Theme

Mahalik is a modern, elegant, and feature-rich WordPress theme designed specifically for building attractive and user-friendly WooCommerce websites. This theme is equipped with advanced WooCommerce features, custom authentication, and versatile shortcodes to display products in various formats on the frontend.

## Key Features

-   **WooCommerce Integration**: Seamlessly integrates with WooCommerce, offering modern and stylish designs for your online store.
-   **Custom Login & Registration**: Customizable login and registration forms with support for OTP-based authentication.
-   **Responsive Design**: Fully responsive, ensuring your store looks great on all devices.
-   **SEO Optimized**: Built with SEO best practices in mind to help your store rank higher in search engine results.
-   **Shortcodes**: A collection of shortcodes for displaying products, allowing flexibility in how and where products are showcased on your site.

## Installation

1. Download the theme files and upload them to your WordPress site.
2. Activate the theme from the WordPress dashboard.
3. Navigate to the Customizer to configure your site settings.

## Shortcodes

Mahalik provides several shortcodes to help you display products on your site with ease. Below is a list of available shortcodes and their usage:

### 1. `[mahalik_product_featured]`

**Description**: Displays a list of featured products.

**Usage**:

```shortcode
[mahalik_product_featured]
```

### 2. `[mahalik_product_latest]`

**Description:** Displays the latest products added to your WooCommerce store.

Available Attributes:

`ids:` Comma-separated list of product IDs to display specific products.

`category:` Display products from a specific category.

`qty:` Number of products to display (default is 4).

**Usage**:

```shortcode
[mahalik_product_latest]
[mahalik_product_latest ids="1,2,3"]
[mahalik_product_latest category="hoodies"]
[mahalik_product_latest qty="6"]
```

### 3. `[mahalik_product_recommended]`

**Description:** Displays a list of recommended products based on your settings.

**Available Attributes:**

`ids:` Comma-separated list of product IDs to display specific products.
`category:` Display products from a specific category.
`qty:` Number of products to display (default is 4).
`title:` Custom title for the product section.

**Usage Examples:**

```shortcode
[mahalik_product_recommended ids="1,2,3"]
[mahalik_product_recommended category="hoodies"]
[mahalik_product_recommended qty="6"]
[mahalik_product_recommended title="Featured Recommendations"]
```

### 4. `[mahalik_product]`

**Description:** A versatile shortcode for displaying products with various sorting and filtering options.

**Available Attributes:**

`ids:` Comma-separated list of product IDs to display specific products.
`category:` Display products from a specific category.
`qty:` Number of products to display (default is 4).
`title:` Custom title for the product section.
`orderby:` Sort products by popularity, discount, or other WooCommerce-supported criteria.

**Usage Examples:**

```shortcode
[mahalik_product]
[mahalik_product ids="1,2,3"]
[mahalik_product category="hoodies"]
[mahalik_product qty="6"]
[mahalik_product title="Best Sellers"]
[mahalik_product orderby="popularity"]
[mahalik_product orderby="discount"]
```
