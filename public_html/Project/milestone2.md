<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Shivam Shah(ss4349)</td></tr>
<tr><td> <em>Generated: </em> 4/26/2022 12:19:51 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165201622-1243ba80-1bfd-471b-bdd1-d8b07f8f6870.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the admin user that created item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165202361-c0f15979-a5c1-46ce-9c24-3084c14e4102.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Products table is populated clearly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>The code flow for creating is through add_item file because it connects to<br>the products table which has all the variables for creating a product and<br>your inputs are collected.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/69">https://github.com/Shivamshahgithub/IT202-004/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/admin/add_item.php">https://ss4349-prod.herokuapp.com/Project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165203174-5498ca34-28ca-4e21-b420-de6a9bf1fdb5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing all 10 products (page1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165203219-2eb9ccad-c0f9-4cc8-a3ce-13d6b0e4fc77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing all 10 products (page2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165202811-02e43574-95d2-4655-af44-4ed28ee7d673.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing price down filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165202931-a3fd8f63-538c-4b92-a019-792b96051fb6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shop page showing different sorting by category with down price<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165203945-ee9a8e3a-0896-426a-9d2f-782b37a5a545.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code showing how filter and sort logic works<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>Basically the screenshot above clearly explains that there are options for different filters<br>and sorting to be applied. When you select one option of the droplist<br>and click apply it arranges the list of products according to the sorting<br>you prefer.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/68">https://github.com/Shivamshahgithub/IT202-004/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/shop.php">https://ss4349-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165205072-f2768fe6-fa39-4992-9cc7-9a2783cdb926.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin&#39;s product list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>So basically this list item file is connected to data we input in<br>the database of products table and the code collects results and displays on<br>this list products page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/69">https://github.com/Shivamshahgithub/IT202-004/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/admin/list_items.php">https://ss4349-prod.herokuapp.com/Project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165207034-fda6ea86-70a3-4d34-83b8-7f4cdcf7978d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button visible to admin on shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165207337-f77833ed-1d28-4c26-9e79-bb6e21b1b9d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button visible to admin on product details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165207671-84e24411-beac-48a7-bb8d-b035c06e6ce1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit button visible to admin on admin&#39;s products list page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165208811-24b848da-781a-4888-9a54-ff94e8d6ebd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Editing a product from admin edit product page (before)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165209118-21b5a188-b88a-4cd5-a510-bb58e9e42e5c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Editing a product from admin edit product page (after)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>Shop file has a link of edit item and product details page so<br>it can be accessible for admin to makes changes. List item file has<br>a link of edit item so it can be accessible from product list<br>page. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/68">https://github.com/Shivamshahgithub/IT202-004/pull/68</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/69">https://github.com/Shivamshahgithub/IT202-004/pull/69</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/shop.php">https://ss4349-prod.herokuapp.com/Project/shop.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/admin/edit_item.php">https://ss4349-prod.herokuapp.com/Project/admin/edit_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165210130-788604bb-a53d-4031-9bdc-d1f6aa0fff4f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before clicking the button towards product details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165210243-e2aac73c-2d9d-43cd-8ea7-fe106934225f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After clicking the button leads to this product detail page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>So basically shop has a link connected to product detail page for each<br>item and the product details file has a format of card which collects<br>the column and its value from product table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/66">https://github.com/Shivamshahgithub/IT202-004/pull/66</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/product_details.php?id=2">https://ss4349-prod.herokuapp.com/Project/product_details.php?id=2</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165211908-3a5eb153-fe2e-461f-a3a4-42e791faa363.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Success message of adding a product to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165212113-15b52b5a-546e-4510-96c9-9933f4e19508.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error message when i click add to cart on shop page without logged<br>into an account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165212276-4ab2ab5b-a199-4b81-a574-9d720483791b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart table has these data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>1 cart per user only<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>So in the cart file i had to set the process of add<br>to cart which would collect values and insert it to the cart through<br>the query and show it on the cart page when the button is<br>click on shop page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/71">https://github.com/Shivamshahgithub/IT202-004/pull/71</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165346229-38ce0be7-1def-4c22-a480-febb0cb673fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows subtotal, total and if you click the product it will take you<br>to details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>So the main query has the equation of unit_price * desired_quantity and the<br>formula of cart total will both give subtotal and total calculations. Using echo<br>print the value which is being input in the products table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/71">https://github.com/Shivamshahgithub/IT202-004/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/cart.php">https://ss4349-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165219878-f61efa05-2f47-439a-929e-9438abad9cde.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before changing the cart quantity<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165219993-ec4c1fcc-447e-4081-9c24-db2d38ba8f0c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After changing the cart quantity<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165220204-d348fa49-8927-468c-929b-ffb256e3871c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before setting cart quantity to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165220284-c3df10ef-347d-4949-868e-1a84436cf55c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After setting cart quantity to 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165220338-c2697b07-82f0-4bd4-b38b-078169a8335f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>It doesn&#39;t allow negative quantity to be entered<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>So there is if statement for both 0 and negative quantity values where<br>0 will remove product and negative values can&#39;t be entered.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/71">https://github.com/Shivamshahgithub/IT202-004/pull/71</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165221034-7a0ad130-aedb-4e03-b2c7-67180cd310ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before deleting a single product from cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165221083-4e7fbd7e-b5e0-4d9f-a5df-eab7756185bf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After deleting a single product from cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165221201-ecc1cb19-fc1b-4222-b465-ad8a92b84b31.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before clearing the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165221232-f1f476a8-9269-4a18-ae7f-418ca44836f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After clearing the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>So the remove button is for deleting a product from the cart which<br>is connect to the cart table and it gives a message of it<br>being done<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/Shivamshahgithub/IT202-004/pull/71">https://github.com/Shivamshahgithub/IT202-004/pull/71</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165222840-af1ae68c-a6ea-4d09-abb7-eddbb0d81833.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 1 of updated proposal<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165222924-a430fc1c-9762-4310-86e1-64f22f79df0e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 2 of updated proposal<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165223932-45da4a10-4b1f-4ddf-b2fd-dc4ee1812b25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 1 of issues done on project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/165224066-9971dd02-5c2d-446a-b6f6-248a7548fdc7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Part 2 of issues done on project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-2-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>