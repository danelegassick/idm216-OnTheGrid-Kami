<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Index';
include_once __DIR__ . '/_components/header.php';

?>
<div class="menu">
<div class="wait-time">
    <img class="wait-time-image" src="<?php echo site_url() . '/dist/images/cart-images/wait-time-penguin.png';?>" alt="kami-logo">
</div>
<div class="kami-today">
    <h4>Kami today</h4>
    <hr>
</div>
<div class="carousel">
    <div class="todays-pick">
        <img src="<?php echo site_url() . '/dist/images/card-food.png';?>" alt="Tteok-bok-ki" class="card-img">
        <div class="pick">
            <img src="<?php echo site_url() . '/dist/images/sparkles.svg';?>" alt="sparkles" class="icon-small inline-block">
            <p class="inline-block">Todays pick</p>
        </div>
        <div class="card-content">
            <h4>Tteok bok ki</h4>
            <h4>$8</h4>
        </div>
        </div>
            <div class="pagination">
                <span class="pagination-active"></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="menu-sections">
            <h4>Meals<hr class="active-menu"></h4>
            <h4>Sides<hr></h4>
            <h4>Drinks<hr></h4>
        </div>
        <div class="food-section">
            <a href="food-details.html">
                <div class="food-card">
                    <img class="food-card-image" src="<?php echo site_url() . '/dist/images/menu-images/bibimbap.png';?>" alt="photo of bibimbap">
                    <div class="food-card-right">
                        <div class="food-card-title">
                            <h4>Bibimbap</h4>
                            <h4>$10</h4>
                        </div>
                        <div class="food-card-desc">
                            <p>
                                Steamed white rice with assorted fresh, marinated, and sautéed vegetables.
                            </p>
                        </div>
                        <img class="quick-add-btn" src="<?php echo site_url() . '/dist/images/QuickAdd.png';?>" alt="quick add button">
                    </div>
                </div>
            </a>
        </div>
</div>

<div class="food-details">
<div class="modal">
            <div class="food-detail-text">
                <p class="x-out">x</p>
                <img src="../dist/images/bibimbap-hero.png" alt="bibimbap" class="food-detail-hero">
                <div class="inline">
                    <h1>Bibimbap</h1>
                    <h1>$8</h1>
                </div>
                <p>
                    Steamed white rice with various vegetables and proteins.
                </p>
                <h2>Ingredients</h2>
                <p>
                    Carrots, Green Squash, Watercress, Bean Sprouts, Roamain Lettuce on Rice with Fried Egg and Sesame
                    Oil and Gochujang (Korean Hot Pepper Paste).
                </p>
                <h2>Customize Spice Level</h2>
                <div class="flame-grid">
                    <div>
                        <img id="flameImg" src="../dist/images/mild-flame.svg" alt="flame">
                    </div>
                    <div class="flame-label">
                        <p>hot -</p>
                        <p>medium -</p>
                        <p>mild -</p>
                    </div>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="3" value="1" class="slider mild" id="myRange">
                    </div>
                </div>
                <h2>Add protein (+$1)</h2>
                <div class="protein-grid">
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="1">
                            <span>
                                <img src="../dist/images/protein-beef.svg" alt="beef">
                                <p>Beef</p>
                            </span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="2">
                            <span>
                                <img src="../dist/images/protein-tofu.svg" alt="Tofu">
                                <p>Tofu</p>
                            </span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="3">
                            <span>
                                <img src="../dist/images/protein-chicken.svg" alt="Chicken">
                                <p>Chicken</p>
                            </span>
                        </label>
                    </div>
                </div>
                <h2>Select Dietary Needs</h2>
                <div class="checkbox-container">
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="1"><span>Lactose Free</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="2"><span>Vegetarian</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="3"><span>Dairy Free</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="4"><span>Gluten Free</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="5"><span>Peanut Free</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="6"><span>Kosher</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="7"><span>Vegan</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="8"><span>Halal</span>
                        </label>
                    </div>
                    <div id="ck-button">
                        <label>
                            <input type="checkbox" value="9"><span>Soy Free</span>
                        </label>
                    </div>
                </div>
                <h2>Add a note</h2>
                <div>
                    <input type="text" name="" id="">
                </div>

            </div>
            <div class="add-to-cart">
                <div class="stepper">
                    <!-- Microinteraction goes here -->
                </div>
                <a class="btn-dark" href="cart.html">Add to cart $9</a>
            </div>

        </div>
    </main>
</div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>