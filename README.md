# Faq
Epic: create a way to follow users (feature)
User stories:
1.	A registered user can see the list of all another registered users. (except him/her) ( go to the dropdown menu -> follow_users)
2.	A registered user can follow another registered users given in the list. (except him/her)
3.	A registered user can unfollow users who is previously followed by him/her.
4.	A following user is notified through email that the registered user (username) is following him/her.
Explanation:  If I have registered as Toral Joshi and I am following Keith William, then Keith William will be notified “Toral is following you.”. Here Keith Willian has to be already registered previously, so he will be shown in the all users list and Toral Joshi can ‘Follow’ or ‘Unfollow’ him.

Unit-Tests:
1.	follow user test
2.	Notification test

•	For email notifications I have used mailtrap.io. You can check emails on that. However, I have submitted a screenshot of mailtrap.io (email notification).
Username: toraljoshi0501@gmail.com
Password: Maruti2550
•	On Heroku, please register once to check follow and unfollow feature. Moreover, email notification feature needs add-on for mailtrap.io to be installed which are paid. No error on Heroku. Once add-ons will be installed, email notification would work. On localhost, it works properly. I did a research and tried email notifications using another platform such as through Gmail for working feature on Heroku (you can see that in my commits), but due to high security of Gmail, I was not able to do it.

