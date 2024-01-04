<?php
/* Write a PHP abstract class called 'Animal' with abstract methods like 'eat()' and 'makeSound()'. Create subclasses like 'Dog', 'Cat', and 'Bird' that implement these method */
abstract class Animal {
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal {
    public function eat() {
        echo "Dog is eating." . PHP_EOL;
    }

    public function makeSound() {
        echo "Dog is barking." . PHP_EOL;
    }
}

class Cat extends Animal {
    public function eat() {
        echo "Cat is eating." . PHP_EOL;
    }

    public function makeSound() {
        echo "Cat is meowing." . PHP_EOL;
    }
}

class Bird extends Animal {
    public function eat() {
        echo "Bird is eating." . PHP_EOL;
    }

    public function makeSound() {
        echo "Bird is chirping." . PHP_EOL;
    }
}

// Example usage:
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$dog->eat();
$dog->makeSound();

$cat->eat();
$cat->makeSound();

$bird->eat();
$bird->makeSound();
