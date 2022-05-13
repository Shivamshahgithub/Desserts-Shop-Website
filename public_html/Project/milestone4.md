<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Shivam Shah(ss4349)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 10:07:01 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168186617-0b3e8a36-8f5f-4429-bdb6-c450140b632f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is new column on users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168192811-7d461aad-fd42-4ebc-a820-084b5e6bae3b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is update profile edit view (profile page)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168192655-e385f709-ad00-49d2-9444-620c02a08ab3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is profile view view (profile page). Well it is still shown publicly<br>even though I changed the value of visibility in users table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/91">https://github.com/Shivamshahgithub/IT202-004/pull/91</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/profile.php">https://ss4349-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/user_profile.php">https://ss4349-prod.herokuapp.com/Project/user_profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>So the logic is it should allow user to have there email public<br>or private so it is connected to profile page where all the fields<br>like username and password get fetch here and I tried changing it through<br>the code didn&#39;t work and the changing the value in users table didn&#39;t<br>change.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168188037-e2dd39c3-e337-4c93-a1b7-df4e31802613.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This table doesn&#39;t have any data for some reason but on the website<br>I have the rating setup.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168194310-32c0dd3c-7e4a-4aa2-826c-64ac0f590d6b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the product details page with ratings<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168193530-3fc51cb6-1a74-4ed5-a314-da3d9b07744d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Ratings form available on order details page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168194436-55056dc0-017d-46fc-9341-f7e5918b41e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am not able to get a error message for it as it<br>only allows to rate for the product purchased but here is ratings page<br>but it doesn&#39;t work.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/92">https://github.com/Shivamshahgithub/IT202-004/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/product_details.php">https://ss4349-prod.herokuapp.com/Project/product_details.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>The rating form has option of adding comment and rating for the product.<br>The query prepares database to add rating to the order details page and<br>it shows on product details as well.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168194936-5ff9d38e-7c04-49a7-83f7-09e6bd56cf25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filters and pagination of purchase history page of user are there but there<br>is no purchase history showing up on the page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/87">https://github.com/Shivamshahgithub/IT202-004/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/purchase_history.php">https://ss4349-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168194794-09b37c71-f326-452e-8a84-0b7b1d461bb0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filters and pagination of purchase history page of admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/87">https://github.com/Shivamshahgithub/IT202-004/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/purchase_history.php">https://ss4349-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>Total price is based on results from checkout form page where the total<br>payment is entered so the form in the checkout file does this job.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168195226-006e0423-f39b-41b5-a036-84b2aab5e0ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Pagination of shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/92">https://github.com/Shivamshahgithub/IT202-004/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/shop.php">https://ss4349-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168195945-50be657e-9c57-4b02-ad95-13caadc4d5bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Well the stock number changes on my product details page so I have<br>put that and I think it will give a message for out of<br>stock<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/92">https://github.com/Shivamshahgithub/IT202-004/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/product_details.php">https://ss4349-prod.herokuapp.com/Project/product_details.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>It just works normal where I add the product to the shop page<br>and it asks for how much stock is there so its just a<br>input value of stock.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168196039-1f30453a-7cfa-45dd-8c8b-5eb213a03a53.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I have average rating as the sorting option but when I apply that<br>filter it still gives the same order of products.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168190726-2d18d9b7-68ea-4d77-8a59-bbc6801660a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the products table where I do have column of average and<br>number rating but the rating don&#39;t get save.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/92">https://github.com/Shivamshahgithub/IT202-004/pull/92</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/shop.php">https://ss4349-prod.herokuapp.com/Project/shop.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>Well the average rating should be stored in the product table so that<br>on the shop page the sorting executes correctly. It would be just be<br>calculating from the ratings file where the equation is there.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168196976-9c179821-07b1-4a32-a5d8-d4b198c28b2b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the update proposal where all the dates and links are shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168196226-9fd4daa4-2fe3-4b9d-b084-e0e77abc5b87.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the issues for project which i did closed because most of<br>it works but i want to say that some of the parts in<br>specific issues doesn&#39;t work.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-4-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>