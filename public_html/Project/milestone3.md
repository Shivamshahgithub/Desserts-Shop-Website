<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Shivam Shah(ss4349)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 5:47:20 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-3-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to purchase their cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168155002-06c7028d-74eb-420c-824a-00abf81654c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows data in orders table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168155096-72bc1a44-f04c-4c9e-b5fe-fdb4174030b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows order items table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168167747-a455c089-8a92-43aa-83c9-13c51d285f8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows purchase form on checkout page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the purchase validation code (ensure your ucid and date are included) (Payment method, purchase value, shipping info)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168158896-cb092d7c-d447-49e7-9e7d-9422a9be330f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows purchase validation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the UI (Price check, Quantity/Stock check)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>I don&#39;t have this part where it gives a validating message for price<br>check, quantity/stock check. I have the code for checking these things where if<br>they are not same it won&#39;t work but its not working for me<br>so.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>So the code starts with query which gets data from the sql tables.<br>All the form validation code is there if anything is left empty, it<br>will send a message. Then it validates price check, quantity and then the<br>actual form of input for shipping info and payment method comes. At the<br>end the review items where it also gets info from cart before hitting<br>purchase order.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/85">https://github.com/Shivamshahgithub/IT202-004/pull/85</a> </td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/checkout.php">https://ss4349-prod.herokuapp.com/Project/checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168168228-a763fe33-7962-49bf-a95b-14cb4d51af87.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the order confirmation page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>So basically there are query and it tries to fetch and execute it.<br>There are specific fields setup but its not retrieving data on the order<br>confirmation page from the checkout page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/86">https://github.com/Shivamshahgithub/IT202-004/pull/86</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/order_confirm.php">https://ss4349-prod.herokuapp.com/Project/order_confirm.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168168863-9314f4b6-bd30-46fa-b000-f6cb704c2688.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing purchase history for a user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168169175-1c4c659b-fe95-4bc4-a3d8-71949c7c01c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Full details of a purchase<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>The query are the base of it so setting up and fetching results<br>from the data enter in the checkout form. for each loops do the<br>job of getting the results. It records the specific details which can be<br>seen on the screenshot above. Clicking the order detail link right next to<br>the info given leads to the 2nd screenshot where all the details reside.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/86">https://github.com/Shivamshahgithub/IT202-004/pull/86</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/87">https://github.com/Shivamshahgithub/IT202-004/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/purchase_history.php">https://ss4349-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/order_details.php">https://ss4349-prod.herokuapp.com/Project/order_details.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168171240-f270fbc3-6e7b-470d-91ce-c7e2fbf8a8f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the screenshot showing the purchase history page not from multiple users<br>but there are different orders.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page) (from a user that's not the Store Owner)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168170942-37d4577b-1d2d-4c12-93bf-7f7d9598419f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows it doesn&#39;t load for me after purchasing order from another<br>user showing the order details of a purchase.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>For the user purchase history it doesn&#39;t display referring to the screenshot above,<br>I am not sure why but from my store owner page its working.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/86">https://github.com/Shivamshahgithub/IT202-004/pull/86</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/87">https://github.com/Shivamshahgithub/IT202-004/pull/87</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/order_details.php">https://ss4349-prod.herokuapp.com/Project/order_details.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ss4349-prod.herokuapp.com/Project/purchase_history.php">https://ss4349-prod.herokuapp.com/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168173314-30434faf-e85b-45ab-b477-a564b204e1b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the update proposal where all the dates and links are shown<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168173463-6dfe6ed2-d842-4a75-9095-1fce3b75f243.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Continue of 1st screenshot showing the update proposal where all the dates and<br>links are shown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/168172396-9f21ab91-a0a2-440a-ac72-29a71f8ce396.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the issues for project which i did closed because most of<br>it works but i want to say that some of the parts in<br>specific issues doesn&#39;t work.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone-3-shop-project/grade/ss4349" target="_blank">Grading</a></td></tr></table>