<?php

global $auth;


    try {
        $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
            global $auth;
            $auth->confirmEmail($selector, $token);

            $auth->login($_POST['email'], $_POST['password'], null);

            update_field('name', htmlspecialchars($_POST['name']), 'user', $auth->id());
            update_field('phone_number', htmlspecialchars($_POST['phone_number']), 'user', $auth->id());

            redirect('/user/dashboard');
        });

        echo 'We have signed up a new user with the ID ' . $userId;
    } catch (\Delight\Auth\InvalidEmailException $e) {
        die('Invalid email address');
    } catch (\Delight\Auth\InvalidPasswordException $e) {
        die('Invalid password');
    } catch (\Delight\Auth\UserAlreadyExistsException $e) {
        die('User already exists');
    } catch (\Delight\Auth\TooManyRequestsException $e) {
        die('Too many requests');
    }
