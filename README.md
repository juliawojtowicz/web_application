# web_application

The project presents a web application - the "Candles&Plants" online store. The main page has two subpages with products, a subpage with contact and a shopping cart. The cart is operated using a js script. After selecting the products, the shopping cart takes the user to the login page (an account is required to complete the purchase). On the login page, you can log in with your profile or create a nonexistent one.

Two databases have been created, one for admins and one for users. After entering the login and password, in the case of logging in, the connection to the appropriate database is made. If you connect to the "users" database, you are redirected to the page with the form where the user completes his data for shipping the product.

In the case of registration, the ID key is checked, which is the user's login. If the key is duplicated, a message appears that the user already has an account. Passwords stored in the database are hashed.

After completing the form correctly, you are redirected to the order summary page - ordered products, order total and shipping details. From the summary you can go back to the home page of the store.