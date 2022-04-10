<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Shivam Shah(ss4349)</td></tr>
<tr><td> <em>Generated: </em> 4/4/2022 12:26:40 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/ss4349" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161451683-1a180cd1-c6ea-4683-ae1b-6d9e1c4e86be.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successfully registered a user through the form fields<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161459514-d2a8955f-cd1c-4604-acf9-b05e317c4059.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username and password error having to register user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161451744-7ef2b0e0-fcd2-4e5c-97ec-161c6e36ead4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users table is a proof of the successful users registered<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/18">https://github.com/Shivamshahgithub/IT202-004/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Basically we set up a form in register.php for getting a new user.<br>It has email, username, password and confirm password inputs with their unique requirement<br>set up. Fill up everything correctly will successfully set up an user and<br>if there is an error then it won&#39;t let the user register.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161462107-1701b02c-ab13-4555-874e-6418603164b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>login page error as email is incorrect<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161453563-7988bff3-4d6a-477e-98e5-6716fe5e5a06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful login towards home page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/20">https://github.com/Shivamshahgithub/IT202-004/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The code of login allows user to login using username/email with correct password<br>matching without any errors. It gives a welcome user message as soon as<br>user logs in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161453354-ba04825f-0b8b-4948-8db2-1a69bf5be2e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>When user logs out it gives a successful message of it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161465002-125c0627-774b-4600-acca-4aa6190fa9a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>If user tries going back to login after logged out then it won&#39;t<br>allow it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/20">https://github.com/Shivamshahgithub/IT202-004/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The code basically gives a message of successful logged out when the user<br>logs out. It also resets the session and display a message of logging<br>in again if user tries to go back after logging out.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161465002-125c0627-774b-4600-acca-4aa6190fa9a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Same as above how it would make user log in again for accessing<br>after logging out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161464437-c20e9fce-84fc-4a1e-b071-1248d42f4d20.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows that you have to log in to access the create role<br>page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161454978-95f1fe62-50c2-4948-babf-e0506e2c6d34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles table showing the which id has particular role assigned<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161455038-19f83332-8fb9-4021-a147-7cc3a1dc4bf7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserRoles table shows which user id is active or not<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/40">https://github.com/Shivamshahgithub/IT202-004/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Mentioned previously if user tries going back to login page after logged out<br>then it won&#39;t allow it.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>It basically allows only the admin role user to access the role-protected page<br>and other user roles can&#39;t access it to keep it secure.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161451980-8b58a3c7-0edb-4c16-b476-30fedf3819b8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows all the different styling done to this login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/36">https://github.com/Shivamshahgithub/IT202-004/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I changed background color from pink to blue as it looks much better<br>and still. Other changes are border for regular text-box, font-size and color for<br>clarity.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161452073-6f044a9c-90c4-4199-aca8-b737c329a686.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Example of user entering incorrect password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/20">https://github.com/Shivamshahgithub/IT202-004/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>It is user friendly because it makes it clear for the user to<br>correct the mistake they made in entering and states exactly what to change.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161452326-d2849c46-7130-4734-8195-353484c90909.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Just a user checkout profile to update it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/23">https://github.com/Shivamshahgithub/IT202-004/pull/23</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The code basically allows user to change username, email, and new password. It<br>has different validation process just like registering user and it makes sure there<br>are no errors.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161452528-16f23b0f-f6b3-4495-bd1c-12a50cb3040d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User changed the username successfully and gets a message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161470546-5c5b730e-6c46-49e7-abcc-4c3c06ebe4b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Error because it doesn&#39;t meet the requirements of username input<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161452628-5e057768-21d1-4899-8cf8-cf8d2bf7a2cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before username was changed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161452605-aac9dcbc-a364-44d7-90d9-8f2b55c8877a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After username was changed with successful profile saved message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Shivamshahgithub/IT202-004/pull/23">https://github.com/Shivamshahgithub/IT202-004/pull/23</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The code helps in changing password if user forgets it and user might<br>feel like changing the username or email which can be possible with updating<br>profile by getting validated successfully.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161471282-33f31130-b77d-40f1-a6e4-2702e0fbef5e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dates and links<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161471391-8383d46c-01c6-41eb-a2dd-1c24493c37bd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dates and links<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161471458-8ff2bd55-e5f7-4242-b390-b8633ac7dbc1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing dates and links<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161455593-0e1ab02b-5075-4263-a0f3-42831ac99924.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows all issues are done on project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/79953552/161473698-2b70aed3-b3c3-4b10-818c-f8277395619a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows all issues are done on project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-004-S22/it202-milestone1-deliverable/grade/ss4349" target="_blank">Grading</a></td></tr></table>