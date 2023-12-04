-- Set SQL mode and time zone
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = '+01:00';


-- Drop the existing category table if it exists
DROP TABLE IF EXISTS `category`;

-- Create the category table
CREATE TABLE IF NOT EXISTS `category` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL,
    `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Insert data into the category table
INSERT INTO `category` (`name`, `cat_slug`) VALUES
('Coffee', 'coffee'),
('Bakery', 'bakery'),
('Tea', 'tea'),
('Chocolate', 'Chocolate'),
('Espresso Drinks', 'espresso-drinks');



-- Drop the existing coffee_borcelle_products table if it exists
DROP TABLE IF EXISTS `coffee_borcelle_products`;


-- Create a table for chocolate and coffee products
CREATE TABLE IF NOT EXISTS `coffee_borcelle_products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `coffeeType` VARCHAR(50) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `ImageURL` VARCHAR(255),
  `date_added` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


INSERT INTO coffee_borcelle_products (`name`, `description`, `price`, `coffeeType`, `photo`, `ImageURL`, `date_added`)
VALUES
    ("House Blend", "House Blend—a robust coffee with smoky undertones. Crafted for connoisseurs, it's a versatile and aromatic experience. Elevate your coffee ritual with this masterpiece, where each sip is a celebration of strength and sophistication.", 2.50, "Coffee", "house_blend.jpg", "https://media.istockphoto.com/id/512818326/photo/hot-coffee-near-fireplace.jpg?s=612x612&w=0&k=20&c=rw7bTQOv20Oajq5Dm40vDA79ODqkYALJUWRtX9YoMJk=", '2023-11-28'),
    ("Organic French Roast", "Immerse yourself in the velvety allure of our Organic French Roast—a coffee experience that epitomizes smooth indulgence. Savor the mellow richness, expertly roasted to perfection, with subtle hints of molasses that add a touch of complexity. Elevate your coffee moments with this organic masterpiece—an irresistible blend for those who appreciate a refined and flavorful cup..", 3.00, "Coffee", "organic_french_roast.jpg", "https://stonestreetcoffee.com/cdn/shop/products/cold-brew_543x.jpg?v=1638351059", '2023-11-28'),
    ("Organic Decaf", "Delight in the full-bodied richness of our Organic Decaf—a promise of indulgence without the caffeine. Carefully crafted for those seeking a satisfying cup without compromise, it's a smooth and mellow experience that proves you won't miss the caffeine. Elevate your coffee ritual with this delectable blend—an organic, caffeine-free bliss..", 2.75, "Coffee", "organic_decaf.jpg", "https://www.google.com/imgres?imgurl=https%3A%2F%2Fcleanandconscious.com.au%2Fwp-content%2Fuploads%2F2023%2F08%2F1685413374-honest-to-goodnessfood-and-beverage-2-1.jpg&tbnid=v4c3_cISsUH6KM&vet=10CD8QMyiFAWoXChMIuLXJptfmggMVAAAAAB0AAAAAEAM..i&imgrefurl=https%3A%2F%2Fcleanandconscious.com.au%2Fproduct%2Fhonest-to-goodness-organic-decaf-single-origin-coffee%2F&docid=1aCVyA4UuzL0TM&w=1714&h=1714&itg=1&q=Organic%20Decaf&ved=0CD8QMyiFAWoXChMIuLXJptfmggMVAAAAAB0AAAAAEAM", '2023-11-28'),
    ("Machiatto", "Experience the essence of espresso artistry with our Macchiato. A perfect balance of bold espresso and velvety steamed milk, served exclusively in a demitasse cup. This size small delight is crafted for those who savor the intensity of espresso with a touch of creamy elegance. Elevate your coffee moments with the sophistication of Macchiato—a small but mighty indulgence.(Size Small Only)", 4.00, "Coffee", "macchiato.jpg", "https://assets.wsimgs.com/wsimgs/ab/images/dp/recipe/202327/0026/img83l.jpg", '2023-11-28'),
    ("Latte", "Indulge in the symphony of flavors with our Latte—a harmonious blend of bold espresso and silky steamed milk. This velvety creation is more than a coffee; it's an experience. Savor the artful combination of espresso and milk, where every sip is a moment of creamy delight. Elevate your coffee ritual with the lusciousness of Latte—an exquisite treat for the senses.", 3.50, "Coffee", "latte.jpg", "https://www.forkinthekitchen.com/wp-content/uploads/2022/09/220629.iced_.latte_.caramel-9182.jpg", '2023-11-28'),
    ("Mocha", "Experience the enchantment of our Mocha—a magical fusion of bold espresso and decadent steamed chocolate milk. Indulge in the richness of this delightful blend, crowned with whipped cream. For those with a sweet tooth and a love for coffee, Mocha is a symphony of flavors that transforms each sip into a moment of pure chocolate bliss. Elevate your coffee experience with the irresistible allure of Mocha.", 4.50, "Coffee", "mocha.jpg", "https://athome.starbucks.com/sites/default/files/styles/homepage_banner_xlarge/public/2022-05/1_CAH_MochaFrozenBlendedCoffee_Hdr_2880x1660.jpg.webp?itok=XgwDWdyt", '2023-11-28'),
    ("Americano", "Embrace the bold and uncompromising essence of our Americano—a classic that speaks to coffee purists. A blend of one shot of espresso and two shots of hot water, it's simplicity at its finest. Revel in the robust flavor and invigorating strength of this timeless coffee. Elevate your coffee ritual with Americano—a celebration of espresso in its purest form.(1 shot espresso, two shots hot water.)", 2.00, "Coffee", "americano.jpg", "https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn11.bigcommerce.com%2Fs-3stx4pub31%2Fimages%2Fstencil%2F1280x1280%2Fproducts%2F6168%2F17600%2FNescafe_-_Dolce_-_Gusto_-_Starbucks_-_Americano___48918.1654178426.jpg%3Fc%3D2%3Fimbypass%3Don&tbnid=nrrYVfr1QAv9EM&vet=12ahUKEwiW-7La2-aCAxWluCcCHd3vDQUQMyhaegUIARCCAg..i&imgrefurl=https%3A%2F%2Fpampadirect.com%2Fnescafe-dolce-gusto-starbucks-americano-cafe-tostado-molido-en-capsulas-coffee-capsules-100-arabic-8-5-g-0-3-oz-each-box-of-12%2F&docid=oCqXDI1kS-HwoM&w=1280&h=1280&itg=1&q=Americano%20coffee&hl=en-GB&ved=2ahUKEwiW-7La2-aCAxWluCcCHd3vDQUQMyhaegUIARCCAg#imgrc=gWUa_yp4ynx6nM&imgdii=EJJHp1odleyZxM", '2023-11-28'),
    ("Mallory's Famous Snickerdoodles", "savor in the creamy cinnamony goodness of Mallory's Famous Snickerdoodles. Crafted from scratch with Mallory's prizewinning recipe, these cookies are a symphony of flavor and texture. Each bite is a journey into the perfect blend of cinnamon and sweetness, making these cookies a must-have treat for those who appreciate decadent delights. Elevate your sweet moments with the irresistible allure of Mallory's Famous Snickerdoodles.", 2.90, "Bakery", "snickerdoodles.jpg", "https://thecookiedoughdiaries.com/wp-content/uploads/2021/10/snickerdoodles-without-cream-of-tartar-14-2.jpg", '2023-11-28'),
    ("Oatmeal Cookie", "Savor the hearty goodness of our Oatmeal Cookie—a delightful blend of rolled oats, raisins, and cranberries. These cookies are more than a treat; they're a wholesome indulgence. Packed with natural flavors and goodness, each bite offers a comforting mix of chewiness and sweetness. Elevate your snack time with the heartiness of our Oatmeal Cookie—an irresistible choice for those who crave wholesome deliciousness.", 2.50, "Bakery", "oatmeal_cookie.jpg", "https://chefsavvy.com/wp-content/uploads/oatmeal-chocolate-chip-cookies.jpg", '2023-11-28'),
    ("Mixed Berry Muffins", "Come taste our delightful burst of flavors with our Mixed Berry Muffins. Filled with the best berries of the season and topped with a crumb crust, these muffins are a symphony of sweetness and freshness. Each bite offers a perfect balance of moistness and berry goodness. Elevate your snack time with the vibrant and delectable experience of our Mixed Berry Muffins—an irresistible treat for berry lovers..", 3.00, "Bakery", "mixed_berry_muffins.jpg", "https://natashaskitchen.com/wp-content/uploads/2019/02/Breakfast-Muffins-5-600x900.jpg", '2023-11-28'),
    ("Croissant", "Indulge in the morning bliss with our oversized Croissant—a golden masterpiece of buttery flakiness. Baked to perfection, each bite offers a symphony of layers that melt in your mouth. Whether paired with your favorite spread or enjoyed on its own, this Croissant is an indulgent delight for those who appreciate the art of pastry. Elevate your breakfast ritual with the buttery, flaky goodness of our Croissant.", 2.75, "Bakery", "croissant.jpg", "https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.deliciousmagazine.co.uk%2Fwp-content%2Fuploads%2F2018%2F08%2F736128-1-eng-GB_croissant-768x960.jpg&tbnid=vdYv5OmWDTV3kM&vet=12ahUKEwiXn__h4OaCAxWSkScCHUgpPO0QMygjegUIARCHAQ..i&imgrefurl=https%3A%2F%2Fwww.deliciousmagazine.co.uk%2Fhow-to-make-croissants%2F&docid=gRXIB-v3KP-LGM&w=768&h=960&itg=1&q=Croissant&ved=2ahUKEwiXn__h4OaCAxWSkScCHUgpPO0QMygjegUIARCHAQ", '2023-11-28'),
    ("Earl Grey", "Savor the elegance of our Earl Grey—a fragrant black tea delicately infused with bergamot. This classic blend is a timeless favorite, known for its distinctive citrusy aroma and bold flavor. Whether enjoyed in the morning or as an afternoon pick-me-up, Earl Grey is an invitation to indulge in a cup of sophistication. Elevate your tea experience with the refined allure of our Earl Grey.", 2.50, "Tea", "earl_grey.jpg", "https://cdn.intelligencebank.com/au/share/NOrD/1VN0z/3Xg1B/preset=pB6BA/T125AI119_earl_grey_brewed_loose_leaf", '2023-11-28'),
    ("Ginger Hibiscus", "Delight in the vibrant symphony of flavors with our Ginger Hibiscus—a caffeine-free infusion that harmonizes floral, tart, and spicy notes. Immerse yourself in the invigorating blend of hibiscus petals and ginger, creating a tea experience that is both refreshing and bold. Whether hot or iced, Ginger Hibiscus is a celebration of unique flavors. Elevate your tea ritual with the enticing complexity of our Ginger Hibiscus blend.", 2.50, "Tea", "ginger_hibiscus.jpg", "https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/10/2/KC2209__hot-cranberry-and-hibiscus-tea_s4x3.jpg.rend.hgtvcom.1280.1280.suffix/1570037359932.jpeg", '2023-11-28'),
    ("Cascade Green", "Embark on a journey of rejuvenation with our Cascade Green—a hand-selected blend of green teas crafted by our master teamaker. Immerse yourself in the refreshing symphony of green tea leaves, creating a harmonious cup that's both invigorating and soothing. Cascade Green is a tribute to the art of tea-making, offering a blend that elevates your tea-drinking experience. Sip and unwind with the natural essence of our Cascade Green..", 3.00, "Tea", "cascade_green.jpg", "https://cdn.shopify.com/s/files/1/0071/0544/5955/articles/Matcha_Coffee_b44601f7-97be-40ac-9fbd-f97bcbe3d5d7_2000x.jpg", '2023-11-28'),
    ("Chamomile", "Relax and unwind with our Chamomile—a caffeine-free elixir known for its soothing and slightly sweet nature. Immerse yourself in the gentle embrace of chamomile flowers, creating a calming tea experience perfect for any time of day. Whether enjoyed hot or iced, Chamomile is an invitation to tranquility in every sip. Elevate your tea ritual with the serene and naturally sweet essence of our Chamomile.", 2.50, "Tea", "chamomile.jpg", "https://i.ebayimg.com/images/g/cSAAAOSwW8RfkMMw/s-l1200.webp", '2023-11-28'),
    ("Chocolate Truffle", "Indulge in the luxurious richness of our Chocolate Truffle—a decadent blend of premium cocoa and velvety smoothness. Each sip is a journey into the world of exquisite chocolate, creating a moment of pure bliss. Elevate your chocolate experience with this irresistible treat.", 5.00, "Chocolate", "chocolate_truffle.jpg", "https://handletheheat.com/wp-content/uploads/2020/11/how-to-make-chocolate-truffles-SQUARE-1.jpg", '2023-11-28'),
    ("Dark Chocolate Espresso", "Experience the bold fusion of espresso and dark chocolate with our Dark Chocolate Espresso. This sophisticated blend offers a harmonious balance of intense coffee flavor and rich cocoa notes. Elevate your coffee ritual with the indulgence of Dark Chocolate Espresso—a perfect choice for those who appreciate the marriage of coffee and chocolate.", 4.50, "Chocolate", "dark_chocolate_espresso.jpg", "https://noahhelps.org/wp-content/uploads/2020/12/Dark-Chocolate-Cinnamon-Coffee_Dec2020-1.jpg", '2023-11-28');

-- Drop the existing reservations table if it exists
DROP TABLE IF EXISTS `reservations`;

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL, -- Assuming a reasonable length for a phone number
    date DATE NOT NULL,
    time TIME NOT NULL,
    people INT NOT NULL
);


-- Drop the existing menu_items table if it exists
DROP TABLE IF EXISTS `menu_items`;


CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    category VARCHAR(50)
);

-- Inserting coffee products
INSERT INTO menu_items (item_name, description, price, category)
VALUES
    ("House Blend", "Smoky, strong, and assertive, just like us.", 500, "Coffee"),
    ("Organic French Roast", "Smooth and mellow with hints of molasses.", 600, "Coffee"),
    ("Organic Decaf", "Full-bodied and rich, we promise you won't miss the caffeine.", 550, "Coffee");
    

    -- Inserting Espresso Drinks products
INSERT INTO menu_items (item_name, description, price, category)
VALUES
     ("Macchiato", "Espresso and steamed milk, served in a demitasse cup. (Size Small Only)", 800, "Coffee"),
     ("Latte", "Espresso with steamed milk and sometimes a little art on top.", 700, "Coffee"),
     ("Mocha", "Espresso with steamed chocolate milk and whipped cream. Also available with white chocolate milk.", 900, "Coffee"),
     ("Americano", "1 shot espresso, two shots hot water.", 400, "Coffee");

-- Inserting bakery products
INSERT INTO menu_items (item_name, description, price, category)
VALUES
    ("Mallory's Famous Snickerdoodles", "Creamy cinnamony goodness made from scratch with our founder Mallory's prizewinning recipe.", 290, "Bakery"),
    ("Oatmeal Cookie", "Packed with rolled oats, raisins, and cranberries, these monster cookies are (almost) good for ya!", 250, "Bakery"),
    ("Mixed Berry Muffins", "Filled with the best berries of the season and topped with a crumb crust.", 300, "Bakery"),
    ("Croissant", "Our oversized croissants are buttery, flaky, and usually all sold out by 7 a.m.", 275, "Bakery");

-- Inserting Chocolate Drinks products
INSERT INTO menu_items (item_name, description, price, category)
VALUES
    ("Dark Chocolate Espresso", "Bold fusion of espresso and dark chocolate for a sophisticated blend.", 700, "Chocolate"),
    ("Chocolate Truffle", "Luxurious richness with premium cocoa and velvety smoothness.", 800, "Chocolate");

-- Inserting tea products
INSERT INTO menu_items (item_name, description, price, category)
VALUES
    ("Earl Grey", "Black tea fragranced with bergamot.", 250, "Tea"),
    ("Ginger Hibiscus", "Floral, tart, and spicy. Caffeine-free.", 250, "Tea"),
    ("Cascade Green", "A blend of green teas hand-selected by our master teamaker.", 300, "Tea"),
    ("Chamomile", "Soothing and slightly sweet. Try it with honey! Caffeine-free.", 250, "Tea");


-- Drop the existing details table if it exists
DROP TABLE IF EXISTS `details`;

-- Create a table for product details
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL,                     -- Unique identifier for details
  `sales_id` int(11) NOT NULL,               -- ID of the associated sale
  `product_id` int(11) NOT NULL,             -- ID of the associated product
  `quantity` int(11) NOT NULL                -- Quantity of the product in the sale
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;


-- Drop the existing sales table if it exists
DROP TABLE IF EXISTS `sales`;

-- Create a table for sales records
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL,                     -- Unique identifier for sales
  `user_id` int(11) NOT NULL,                -- ID of the user who made the sale
  `pay_id` varchar(50) NOT NULL,             -- Payment identifier
  `sales_date` date NOT NULL                 -- Date of the sale
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


-- Drop the existing users table if it exists
DROP TABLE IF EXISTS `users`;

-- Create a table for user information
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,                     -- Unique identifier for users
  `email` varchar(200) NOT NULL,             -- User's email address
  `password` varchar(60) NOT NULL,           -- User's password (hashed)
  `type` int(1) NOT NULL,                    -- User type (e.g., admin, customer)
  `firstname` varchar(50) NOT NULL,          -- User's first name
  `lastname` varchar(50) NOT NULL,           -- User's last name
  `username` varchar(50) NOT NULL,           -- User's username
  `address` text NOT NULL,                   -- User's address
  `contact_info` varchar(100) NOT NULL,     -- User's contact information
  `photo` varchar(200) NOT NULL,             -- Filename of user's profile photo
  `status` int(1) NOT NULL,                  -- User status (e.g., active, inactive)
  `activate_code` varchar(15) NOT NULL,      -- Activation code for the account
  `reset_code` varchar(15) NOT NULL,         -- Reset code for password reset
  `created_on` date NOT NULL                 -- Date the user account was created
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;



-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);


--
-- Indexes for table `details`
--
ALTER TABLE `details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `coffee_borcelle_products`
 ADD PRIMARY KEY (`id`);

-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`id`);
 

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
 ADD PRIMARY KEY (`id`);

 --
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`id`);


--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `coffee_borcelle_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;


-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;


-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
