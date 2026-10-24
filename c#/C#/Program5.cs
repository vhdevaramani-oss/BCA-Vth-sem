
using System;

// Base Class
class Animal
{
    public virtual void Speak()
    {
        Console.WriteLine("Animal makes a sound");
    }
}

// Derived Class
class Dog : Animal
{
    // Overriding the base class method
    public override void Speak()
    {
        Console.WriteLine("Dog barks");
    }
}

class Program
{
    static void Main()
    {
        Animal a1 = new Animal();
        Animal a2 = new Dog();

        a1.Speak();
        a2.Speak();
    }
}
