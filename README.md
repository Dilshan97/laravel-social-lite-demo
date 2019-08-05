
# laravel-social-lite-demo

This Repository discribe how to use Social authentication with Laravel's Official SocialLite Package. You can use your social logins as well.

 ## Getting Started

    Official Package -> `https://github.com/laravel/socialite`
    
### Installation:

1. Clone the repository and import it to your favorite IDE.
2. Run the fallowing Command.
		

    `composer install`

3. Make a copy of `.env.example` and Rename it to `.env`
4. Run the fallowing Command
		

    `php artisan key:generate`

5. Set Database credentials.

6. Add your Social Account's `CLIENT_SECRETS`

     **Facebook** 
     
       - Go to the 'https://developers.facebook.com'

       - Then, click `Create App`
       
       - Fill the `Display Name` & `Contact Email` then Click `Create App ID` button.
       
       - You can display a App Dashboard. click `Settings  > Basic.`
       
       - Copy `App ID` & `App Secret`
       
       - Paste into the `.env`
      
       - then fill the app domain as 'localhost'
       
       - Save changes

     **GitHub**
     
       - Go to the https://github.com
       
       - Then go to the Settings >  Developer settings.
       
       - Click OAuth Apps.
       
       - then click New OAuth App
       
       - Fill the details necessary
       
       - Register Application
       
       
7. Run fallowing Command.
		

    `php artisan migrate`

8. Run your project using fallowing command.
		

    `php artisan serve --port=8081`

Demo
    ![enter image description here](https://lh3.googleusercontent.com/dxOoNsogXt6zycAkAX5GksjoiadfKa_p7ajatqtc32CnznhtWcaSJEQnPhBZrX2WVTvEZSlR-RTW)



