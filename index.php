
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
                        <li><a href=".?category_id=1">
                    Guitars                </a>
            </li>
                        <li><a href=".?category_id=2">
                    Basses                </a>
            </li>
                        <li><a href=".?category_id=3">
                    Drums                </a>
            </li>
                    </ul>
        </nav>          
    </aside>

    <section>
        <!-- display a table of products -->
        <h2>Guitars</h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>

                        <tr>
                <td>strat</td>
                <td>Fender Stratocaster</td>
                <td class="right">699.00</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="1">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                        <tr>
                <td>les_paul</td>
                <td>Gibson Les Paul</td>
                <td class="right">1199.00</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="2">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                        <tr>
                <td>sg</td>
                <td>Gibson SG</td>
                <td class="right">2517.00</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="3">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                        <tr>
                <td>fg700s</td>
                <td>Yamaha FG700S</td>
                <td class="right">489.99</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="4">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                        <tr>
                <td>washburn</td>
                <td>Washburn D10S</td>
                <td class="right">299.00</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="5">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                        <tr>
                <td>rodriguez</td>
                <td>Rodriguez Caballero 11</td>
                <td class="right">415.00</td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="6">
                    <input type="hidden" name="category_id"
                           value="1">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
                    </table>
        <p><a href="add_product_form.php">Add Product</a></p>
        <p><a href="category_list.php">List Categories</a></p>        
    </section>
</main>
<footer>
    <p>&copy; 2017 My Guitar Shop, Inc.</p>
</footer>
</body>
</html>