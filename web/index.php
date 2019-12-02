
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>


    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="headerstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

  </head>
  <body>

  <div class="header">
    <h2 class="logo">ITerminologies</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
      <a href="index.php">Home</a>
      <a href="quiz.php">Game</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>


<div class="content">
    
    <div class="it">
<h1>Java and C++ Terminologies</h1>
</div>

<div class="wrapper">
  <div class="words">
    <input type="text" id="search" placeholder="Search ...">
    <button onclick="search()">Go</button>

<ul id="word_list">
</ul>
  </div>



<div class="word">
  <h3 id="word_text">Word</h3>
  <p id="definition">The definition of terms goes here..</p>

  <hr>

  <h3>Usage:</h3>
  <li id="usage">Usage</li>
  
</div>

</div>


    </div>
  </body>
</html>
<script type="text/javascript">
var dictionary = [
{ word:"Abstract",
  def:"A Java keyword used in a class definition to specify that a class is not to be instantiated, but rather inherited by other classes. An abstract class can have abstract methods that are not implemented in the abstract class, but in subclasses.",
  usage:["Abstract classes cannot be instantiated and are designed to be subclassed. They are used to provide some common functionality across a set of related classes while also allowing default method implementations."]
},
{
  word:"Abstract Class",
  def:"A class that contains one or more abstract methods , and therefore can never be instantiated. Abstract classes are defined so that other classes can extend them and make them concrete by implementing the abstract methods.",
  usage:["To use an abstract class, you have to inherit it from another class, provide implementations to the abstract methods in it. If you inherit an abstract class, you have to provide implementations to all the abstract methods in it."]
},
{
  word:"Array",
  def:"An ordered and index-able sequence of values. C++ supports arrays of a single dimension (a vector) or of multiple dimensions.",
  usage:["You can generate a pointer to the first element of an array by simply specifying the array name, without any index. You can pass to the function a pointer to an array by specifying the array's name without an index. C++ allows a function to return an array."]
},
{
  word:"Applet",
  def:"A component that typically executes in a Web browser, but can execute in a variety of other applications or devices that support the applet programming model.",
  usage:["Make an HTML page with the appropriate tag to load the applet code. Supply a subclass of the JApplet class. Eliminate the main method in the application. Move any initialization code from the frame window constructor to the init method of the applet."]
},
{
  word:"Assignment Operator",
  def:"In the C++ programming language, the assignment operator, = , is the operator used for assignment. ... The copy assignment operator, often just called the assignment operator, is a special case of assignment operator where the source (right-hand side) and destination (left-hand side) are of the same class type.",
  usage:["Assignment operators are used to assign value to a variable. The left side operand of the assignment operator is a variable and right side operand of the assignment operator is a value. This operator is used to assign the value on the right to the variable on the left. For example: a = 10; b = 20; ch = 'y';"]
},
{
  word:"Back-End",
  def:"A class that serves as a base for a derived class to inherit members from.",
  usage:["Usually the application which contains all logic (do calculations, work with the DB) etc."]
},
{
  word:"Bean",
  def:"A reusable software component that conforms to certain design and naming conventions. The conventions enable beans to be easily combined to create an application using tools that understand the conventions.",
  usage:["Use the useBean action to declare the JavaBean for use in the JSP page. Use the getProperty action to access get methods and setProperty action to access set methods of the bean."]
},
{
  word:"Bitwise Operator",
  def:"An operator that manipulates the bits of one or more of its operands individually and in parallel. Examples include the binary logical operators (&, |, ^), the binary shift operators (<<, >>, >>>) and the unary one's complement operator (~).",
  usage:["Bitwise operators are used to perform manipulation of individual bits of a number. They can be used with any of the integral types (char, short, int, etc). They are used when performing update and query operations of Binary indexed tree"]
},
{ word:"Bitwise Copy ",
  def:"To copy an object without regard to its structure or members.",
  usage:["In bitwise or shallow copy , the original and the copied one are both references to the same object in memory."]
},
{
  word:"Break",
  def:"C++ keyword used to specify a statement that is used to break out of a for or while loop or out of a switch statement.",
  usage:["It can be used to terminate a case in the switch statement"]
},
{
  word:"Boolean",
  def:"Refers to an expression or variable that can have only a true or false value. The Java programming language provides the boolean type and the literal values true and false.",
  usage:["Operators are simple words (AND, OR, NOT or AND NOT) used as conjunctions to combine or exclude keywords in a search, resulting in more focused and productive results. This should save time and effort by eliminating inappropriate hits that must be scanned before discarding"]
},
{
  word:"Call by Value",
  def:"Passing a copy of an argument to a function. The function cannot then change the argument value. C and C++ use call by value argument passing.",
  usage:["The call by value method of passing arguments to a function copies the actual value of an argument into the formal parameter of the function. In this case, changes made to the parameter inside the function have no effect on the argument. By default, C++ uses call by value to pass arguments"]
},
{
  word:"Comments",
  def:"C++ has C-style comments delimited with /* and */, and new C++-style line-oriented comments starting with//.",
  usage:["Single-line comments (informally, C++ style), start with // and continue until the end of the line. If the last character in a comment line is a \ the comment will continue in the next line. Multi-line comments (informally, C style), start with /* and end with */ ."]
},
{
  word:"Case",
  def:"A C++ keyword used to denote an individual element of a switch statement.",
  usage:["Used when we have multiple conditions and we need to perform different action based on the condition. When we have multiple conditions and we need to execute a block of statements when a particular condition is satisfied. In such case either we can use lengthy if..else-if statement or switch case. The problem with lengthy if..else-if is that it becomes complex when we have several conditions. The switch case is a clean and efficient method of handling such scenarios."]
},
{
  word:"Catch",
  def:"A Java keyword used to declare a block of statements to be executed in the event that a Java exception, or run time error, occurs in a preceding try block.",
  usage:["Used to handle the Exception by declaring the type of exception within the parameter. The declared exception must be the parent class exception ( i.e., Exception) or the generated exception type. However, the good approach is to declare the generated type of exception."]
},
{
  word:"Class",
  def:"In the Java programming language, a type that defines the implementation of a particular kind of object. A class definition defines instance and class variables and methods, as well as specifying the interfaces the class implements and the immediate superclass of the class. If the superclass is not explicitly specified, the superclass will implicitly be Object",
  usage:["A class provides the blueprints for objects. So basically, an object is created from a class. In Java, the new keyword is used to create new objects. Declaration − A variable declaration with a variable name with an object type."]
},
{
  word:"Comment",
  def:"In a program, explanatory text that is ignored by the compiler. In programs written in the Java programming language, comments are delimited using // or /*... */.",
  usage:["Use // text when you want to comment a single line of code. Use /* text */ when you want to comment multiple lines of code. Use /** documentation */ when you would want to add some info about the program that can be used for automatic generation of program documentation."]
},
{ word:"Declaration",
  def:"A C++ entity that introduces one or more names into a program.",
  usage:["The using declaration and class members (C++ only) A using declaration in a definition of a class A allows you to introduce a name of a data member or member function from a base class of A into the scope of A."]
},
{
  word:"Default",
  def:"A Java keyword optionally used after all case conditions in a switch statement. If all case conditions are not matched by the value of the switch variable, the default keyword will be executed.",
  usage:["To provide backward compatibility so that existing intefaces can use the lambda expressions without implementing the methods in the implementation class. Default methods are also known as defender methods or virtual extension methods."]
},
{
  word:"Derived Class",
  def:"A class that inherits members from a base class.",
  usage:["The derived class can add new members or change base class members."]
},
{
  word:"Double",
  def:"A java keyword used to define a variable of type double.",
  usage:["To declare (create) a variable, you will specify the type, leave at least one space, then the name for the variable and end the line with a semicolon ( ; ). Java uses the keyword int for integer, double for a floating point number (a double precision number), and boolean for a Boolean value (true or false)."]
},
{
  word:"Else",
  def:"A Java keyword used to execute a block of statements in the case that the test condition with the if keyword evaluates to false.",
  usage:["Use else to specify a block of code to be executed, if the same condition is false."]
},
{
  word:"Encapsulation",
  def:"A term meaning to wrap up or contain within. Used in relation to the members of a class. See access control.",
  usage:["To prevent the access to the data directly, the access to them is provided through the functions of the class. It is one of the popular feature of Object Oriented Programming(OOPs) that helps in data hiding."]
},
{
  word:"Exception Handling ",
  def:"The process of signalling that an exceptional condition (such as divide by zero) has occurred. An exception is thrown and then caught by an exception handler, after stack unwinding has occurred.",
  usage:["Catches an exception with an exception handler at the place in a program where you want to handle the problem."]
},
{
  word:"Exception",
  def:"An event during program execution that prevents the program from continuing normally; generally, an error. The Java programming language supports exceptions with the try, catch, and throw keywords. See also exception handler.",
  usage:["At run time, that disrupts the normal flow of the program’s instructions."]
},
{
  word:"Extends",
  def:"Class X extends class Y to add functionality, either by adding fields or methods to class Y, or by overriding methods of class Y. An interface extends another interface by adding methods. Class X is said to be a subclass of class Y. See also derived from.",
  usage:["To inherit from a class, use the extends keyword."]
},
{
  word:"Field",
  def:"A data member of a class. Unless specified otherwise, a field is not static.",
  usage:["Used to get the value of the field object. If Field has a primitive type then the value of the field is automatically wrapped in an object."]
},
{
  word:"Float",
  def:"A Java keyword used to define a floating point number variable.",
  usage:["When representing a float data type in Java, we should append the letter f to the end of the data type; otherwise it will save as double. The default value of a float in Java is 0.0f. Float data type is used when you want to save memory and when calculations don't require more than 6 or 7 digits of precision."]
},
{ word:"Floating Point ",
  def:"Non-integral arithmetic. A floating-point number is typically represented as a base-two fraction part and an exponent.",
  usage:["Floating-point numbers are numbers that have fractional parts (usually expressed with a decimal point). You should use a floating-point type in Java programs whenever you need a number with a decimal, such as 19.95 or 3.1415."]
},
{
  word:"Function",
  def:"A C++ entity that is a sequence of statements. It has its own scope, accepts a set of argument values, and returns a value on completion.",
  usage:[" To use a function, you will have to call or invoke that function. When a program calls a function, program control is transferred to the called function."]
},
{
  word:"Function declaration",
  def:"Declaration of a function, including its name, argument types, and return type.",
  usage:["Function declaration is required when you define a function in one source file and you call that function in another file. In such case, you should declare the function at the top of the file calling the function."]
},
{
  word:"Garbage Collection",
  def:"The automatic detection and freeing of memory that is no longer in use. The Java runtime system performs garbage collection so that programmers never explicitly free objects.",
  usage:["Using System.gc() method : System class contain static method gc() for requesting JVM to run Garbage Collector. Using Runtime.getRuntime().gc() method : Runtime class allows the application to interface with the JVM in which the application is running."]
},
{
  word:"Global Variable",
  def:"A variable that is accessible throughout the whole program, whose lifetime is that of the program.",
  usage:["Declared outside of all the function and accessible from all functions including main function are known as Global variables."]
},
{
  word:"Goto",
  def:"C++ keyword, used to transfer control within a C++ function.",
  usage:["Use of goto statement is highly discouraged because it makes difficult to trace the control flow of a program, making the program hard to understand and hard to modify."]
},
{
  word:"Group",
  def:"A collection of principals within a given security policy domain.",
  usage:["They are created by placing the characters to be grouped inside a set of parentheses. For example, the regular expression (dog) creates a single group containing the letters d, o, and g"]
},
{
  word:"GUI",
  def:"Graphical User Interface. Refers to the techniques involved in using graphics, along with a keyboard and a mouse, to provide an easy-to-use interface to some program.",
  usage:["You can use the Java GUI components like button, textbox, etc."]
},
{
  word:"Header File",
  def:"A file containing class declarations, preprocessor directives, and so on, and included in a translation unit. It is expanded by the preprocessor.",
  usage:["Header files contain definitions of Functions and Variables, which is imported or used into any C++ program by using the pre-processor #include statement. Header file have an extension .h which contains C++ function declaration and macro definition."]
},
{
  word:"Heap Storage",
  def:"Heap for dynamic memory allocation, stored in the computer's RAM.",
  usage:["Use heap if you don't know exactly how much data you will need at runtime."]
},
{
  word:"Helper Class",
  def:"A class defined as part of implementing the details of another class.",
  usage:["used to assist in providing some functionality, which isn't the main goal of the application or class in which it is used. An instance of a helper class is called a helper object (for example, in the delegation pattern)."]
},
{
  word:"Hash Code",
  def:"A value used to provide an efficient way to map object and its location, returned by a hash function",
  usage:["First identify the “Bucket” to use using the “key” hash code. If there are no objects present in the bucket with same hash code, then add the object for put operation and return null for get operation."]
},
{
  word:"Hash Function",
  def:"A method used to produce hash code from any data of arbitrary size to data of fixed size",
  usage:["Hash function maps data of random size to a hash of a specific size."]
},
{
  word:"Hexadecimal",
  def:"A number represented by the base of 16",
  usage:["Hexadecimal is more in tune with various uses and instances of numbers in computing."]
},
{
  word:"Identifier",
  def:"The name of an item in a program written in the Java programming language.",
  usage:["Used by symbol tables in various analyzing phases(like lexical,syntax,semantic) of a compiler architecture."]
},
{
  word:"If",
  def:"A Java keyword used to conduct a conditional test and execute a block of statements if the test evaluates to true.",
  usage:["To specify a block of code to be executed, if a specified condition is true."]
},
{
  word:"Int",
  def:"A Java keyword used to define a variable of type integer.",
  usage:["Store references to Integer objects, just as with any other reference (object) type."]
},
{
  word:"Implicit Conversion",
  def:"A conversion done as part of another operation, for example converting a pointer type to bool in an if statement.",
  usage:["performed whenever an expression of some type T1 is used in context that does not accept that type, but accepts some other type T2; in particular: when the expression is used as the argument when calling a function that is declared with T2 as parameter."]
},
{
  word:"Inheritance",
  def:"The process whereby a derived class inherits members from a base class. A derived class will also add its own members to those of the base class.",
  usage:["It allows the child class to acquire the properties (the data members) and functionality (the member functions) of parent class."]
},
{
  word:"Inline Function",
  def:"A function that can be expanded by a compiler at the point of call, thereby saving the overhead time required to call the function.",
  usage:["To reduce the function call overhead. Inline function is a function that is expanded in line when it is called."]
},
{
  word:"Java",
  def:"Sun's trademark for a set of technologies for creating and safely running software programs in both stand-alone and networked environments..",
  usage:["To develop applications for a wide range of environments, from consumer devices to heterogeneous enterprise systems."]
},
{
  word:"JavaBeans",
  def:"A portable, platform-independent reusable component model. A component that conforms to this model is called a bean.",
  usage:["Create dynamic web pages by using separate java classes instead of using java code in a JSP page. It provides getter and setter methods to get and set values of the properties. Using JavaBeans it is easy to share objects between multiple WebPages."]
},
{
  word:"JavaScript",
  def:"A Web scripting language that is used in both browsers and Web servers. Like all scripting languages, it is used primarily to tie other components together or to accept user input.",
  usage:["For enhancing the interaction of a user with the webpage. In other words, you can make your webpage more lively and interactive. JavaScript is also being used widely in game development and Mobile application development."]
},
{
  word:"Keyword",
  def:"Java sets aside words as keywords - these words are reserved by the language itself and therefore are not available as names for variables or methods.",
  usage:["It can be used to refer instance variable of current class. It can be used to invoke or initiate current class constructor. It can be passed as an argument in the method call. It can be passed as argument in the constructor call."]
},
{
  word:"Library",
  def:"A set of object files grouped together. A linker will search them repeatedly and use whatever object files are needed.",
  usage:["A reusable piece of functionality that is self-contained and can be used by other programs."]
},
{
  word:"Lifetime",
  def:"Refers to the duration of the existence of an object. Some objects last for the whole execution of a program, while other objects have a shorter lifetime.",
  usage:["Used to initialize an element of an array ends before the next element of the array begins initialization."]
},
{
  word:"Linkage",
  def:"Refers to whether a name is visible only inside or also outside its translation.",
  usage:["Clears up a number of misconceptions about the behavior of C and C++ programs."]
},
{
  word:"Linker",
  def:"A module that builds an executable, complete program from component machine code modules. The Java linker creates a runnable program from compiled classes. See also compiler , interpreter , runtime system ..",
  usage:["Helps to link a object modules of program into a single object file. It performs the process of linking. Linker are also called link editors. It takes object modules from assembler as input and forms an executable file as output for loader."]
},
{
  word:"Local Variable",
  def:"A data item known within a block, but inaccessible to code outside the block. For example, any variable defined within a method is a local variable and can't be used outside the method..",
  usage:["Are created when the method, constructor or block is entered and the variable will be destroyed once it exits the method, constructor, or block."]
},
{
  word:"Long",
  def:"A Java keyword used to define a variable of type long..",
  usage:["To represent an unsigned 64-bit long, which has a minimum value of 0 and a maximum value of 264-1."]
},
{
  word:"Macro",
  def:"A preprocessor feature that supports parameter substitution and expansion of commonly-used code sequences.",
  usage:["It can turn a long declaration into a short declaration. It is straight to the point. Doesn’t need to be in a namespace or pollute the namespace with using declaration."]
},
{
  word:"Member",
  def:"A field or method of a class. Unless specified otherwise, a member is not static..",
  usage:["Can be characterized as data controlling access to the code. Java is object-oriented programming language."]
},
{
  word:"Method",
  def:"A function defined in a class. See also instance method , class method . Unless specified otherwise, a method is not static..",
  usage:["Methods is used to perform certain actions, and they are also known as fun."]
},
{
  word:"Member Type ",
  def:"- Member class, member enumeration, or member typedef.",
  usage:["Used to define a member's attributes, dues payment schedule, and expiration settings."]
},
{
  word:"Multiple Inheritance",
  def:"A derived class with multiple base classes.",
  usage:["Allow us to combine the features of several existing classes into a single class."]
},
{
  word:"Multithreaded",
  def:"Describes a program that is designed to have parts of its code execute concurrently. See also thread ..",
  usage:["Used when you can perform multiple operations together so that it can save time. Multithreading would usually be beneficial if the different threads execute mutually independent tasks so that it doesn't affect other threads if exception occur in a single thread."]
},
{
  word:"Native",
  def:"A Java keyword that is used in method declarations to specify that the method is not implemented in the same Java source file, but rather in another language..",
  usage:["Applied to a method to indicate that the method is implemented in native code using JNI (Java Native Interface). Native is a modifier applicable only for methods and we can't apply it anywhere else. The methods which are implemented in C, C++ are called as native methods or foreign methods."]
},
{
  word:"Nested Class",
  def:"A class declaration nested within another class.",
  usage:["Used to reflect and to enforce the relationship between two classes. You should define a class within another class when the nested class makes sense only in the context of its enclosing class or when it relies on the enclosing class for its function. For example, a text cursor might make sense only in the context of a text component."]
},
{
  word:"New",
  def:"A Java keyword used to create an instance of a class...",
  usage:["Used to create an instance of the class. In other words, it instantiates a class by allocating memory for a new object and returning a reference to that memory."]
},
{
  word:"New Operator",
  def:"C++ keyword and operator used to allocate dynamic storage.",
  usage:["Used signifies a request for the memory allocation on the heap. If the sufficient memory is available, it initializes the memory and returns its address to the pointer variable. The new operator should only be used if the data object should remain in memory until delete is called."]
},
{
  word:"New Handler",
  def:"A function established by calling set_new_handler. It is called when the new operator cannot obtain dynamic storage.",
  usage:["Typedef of a void function with no parameters, used as the argument and return type in function set_new_handler . A new-handler function is a function that is called by the standard definition of functions operator new and operator new[] when they fail to allocate memory."]
},
{
  word:"Null",
  def:"The null type has one value, the null reference, represented by the literal null, which is formed from ASCII characters. A null literal is always of the null type.",
  usage:["Can be cast to any reference type, but not to any primitive type such as int or boolean."]
},
{
  word:"Object",
  def:"The principal building blocks of object-oriented programs. Each object is a programming unit consisting of data ( instance variables ) and functionality ( instance methods ).",
  usage:["You create objects, modify them, move them around, change their variables, call their methods, and combine them with other objects."]
},
{
  word:"Object File",
  def:"In C or C++, typically the output of a compiler. An object file consists of machine language plus an external name list that is resolved by a linker.",
  usage:["Resulting from the compilation of multiple source files are then linked into an executable, a shared library, or a static library (the last of these being just an archive of object files)."]
},
{
  word:"One Definition Rule",
  def:"There must be exactly one definition of each entity in a program. If more than one definition appears, say because of replication through header files, the meaning of all such duplicates must be identical.",
  usage:["Whereby any unit, template, type, function, or object can have no more than one definition."]
},
{
  word:"Operator",
  def:"A builtin operation of the C++ language, like addition, or an overloaded operator corresponding to a member function of a class.",
  usage:["Is used to perform the operation on the user-defined data type. For example, C++ provides the ability to add the variables of the user-defined data type that is applied to the built-in data types."]
},
{
  word:"Optional Packages",
  def:"The set or sets of APIs in a Java platform edition which are available with and may be supported in a compatible implementation.",
  usage:["Help in writing a neat code without using too many null checks. By using Optional, we can specify alternate values to return or alternate code to run."]
},
{
  word:"Overloading",
  def:"Using one identifier to refer to multiple items in the same scope. In the Java programming language, you can overload methods but not variables or operators.",
  usage:["A feature that allows a class to have more than one method having the same name, if their argument lists are different. It is similar to constructor overloading in Java, that allows a class to have more than one constructor having different argument lists."]
},
{
  word:"Package",
  def:"A group of types . Packages are declared with the package keyword.",
  usage:["Used for preventing naming conflicts. Making searching/locating and usage of classes, interfaces, enumerations and annotations easier."]
},
{
  word:"Parsing",
  def:"The process by which a program written in some programming language is broken down into its syntactic elements.",
  usage:["Used to convert value of one data type to the value of another data type."]
},
{
  word:"Primary Key",
  def:"An object that uniquely identifies an entity bean within a home.",
  usage:["Use as field in a table which uniquely identifies each row/record in a database table. Primary keys must contain unique values. A primary key column cannot have NULL values. A table can have only one primary key, which may consist of single or multiple fields."]
},
{
  word:"Property",
  def:"Characteristics of an object that users can set, such as the color of a window.",
  usage:["Used to maintain list of value in which the key is a string and the value is also a string. One useful capability of the Properties class is that you can specify a default property that will be returned if no value is associated with a certain key."]
},
{
  word:"Polymorphism",
  def:"The ability to call a variety of member functions for a given class object using an identical interface in each case.",
  usage:["Occurs when a parent class reference is used to refer to a child class object."]
},
{
  word:"Queue",
  def:"Are a type of container adaptors which operate in a first in first out (FIFO) type of arrangement. Elements are inserted at the back (end) and are deleted from the front.",
  usage:["Used to insert an element at the back of the queue."]
},
{
  word:"Reference",
  def:"A variable data type in which the variable's value is an address.",
  usage:["Used to refer to an object. They are declared with a specific type which cannot be changed."]
},
{
  word:"Resumption",
  def:"A style of exception handling where program execution continues from the point where an exception is thrown. C++ uses the termination style.",
  usage:["Used to semantics means that the exception handler is expected to do something to rectify the situation, and then the faulting code is automatically retried, presuming success the second time. If you want resumption in C++, you must explicitly transfer execution back to the code where the error occurred, usually by repeating the function call that sent you there in the first place."]
},
{
  word:"Run-time efficiency",
  def:"Refers to the issue of whether basic C++ operations will cause a performance penalty when the program is run.",
  usage:["Used on some platforms to refer to a set of base libraries, which may be distributed in dynamically linkable form with an operating system (with or without header files), or distributed with a C compiler."]
},
{
  word:"Runtime System",
  def:"The software environment in which programs compiled for the Java virtual machine 1 can run. The runtime system includes all the code necessary to load programs written in the Java programming language, dynamically link native methods, manage memory, handle exceptions, and an implementation of the Java virtual machine, which may be a Java interpreter.",
  usage:["To run Java programs, dynamically link native methods, manage memory, and handle exceptions. Implementation of the JVM."]
},
{
  word:"Separate Compilation",
  def:"Refers to the process by which each translation unit of a program is compiled separately to produce an object file. The object files are then combined by a linker.",
  usage:["Where pieces of the program can be compiled independently through the two stage approach of compilation and then linking, so changes to one class would not necessarily require the re-compilation of the other classes."]
},
{
  word:"Static Member",
  def:"A class member that is part of a class for purposes of access control but does not operate on particular object instances of the class.",
  usage:["A static member function can be called even if no objects of the class exist and the static functions are accessed using only the class name and the scope resolution operator."]
},
{
   word:"SQL",
  def:"Structured Query Language. The standardized relational database language for defining database objects and manipulating data.",
  usage:["Used for database creation, deletion, fetching rows, and modifying rows, etc. SQL is based on relational algebra and tuple relational calculus."]
},
{
  word:"Subclass",
  def:"A class that is derived from a particular class, perhaps with one or more classes in between.",
  usage:["Use the proper terminology, Java allows single inheritance of class implementation."]
},
{
  word:"Switch",
  def:"C++ keyword denoting a statement type, used to dispatch to one of several sequences of statements based on the value of an expression.",
  usage:["Use the statement to select one of many code blocks to be executed."]
},
{
  word:"Template",
  def:"A parameterized type. A template can accept type parameters that are used to customize the resulting type.",
  usage:["Are often used in larger codebase for the purpose of code reusability and flexibility of the programs."]
},
{
  word:"Template Argument",
  def:"An actual value or type given to a template to form a template class.",
  usage:["Addresses of functions or objects with external linkage, or addresses of static class members"]
},
{
  word:"Transaction",
  def:"An atomic unit of work that modifies data. A transaction encloses one or more program statements, all of which either complete or roll back. Transactions enable multiple users to access the same data concurrently.",
  usage:["Use to access and update data on two or more networked computer resources."]
},
{
  word:"Try",
  def:"A Java keyword that defines a block of statements that may throw a Java language exception. If an exception is thrown, an optional catch block can handle specific exceptions thrown within the try block. Also, an optional finally block will be executed regardless of whether an exception is thrown or not.",
  usage:["Used to catch exceptions that might be thrown as your program executes. You should use a try statement whenever you use a statement that might throw an exception That way, your program won't crash if the exception occurs. The statements that might throw an exception within a try block."]
},
{
  word:"Type",
  def:"A class or interface.",
  usage:["Java compiler's ability to look at each method invocation."]
},
{
  word:"Unicode",
  def:"A 16-bit character set defined by ISO 10646. See also ASCII . All source code in the Java programming environment is written in Unicode.",
  usage:["Used for representation of text for computer processing."]
},
{
  word:"Union",
  def:" A structure somewhat like a class or struct, except that individual union members share the same memory.",
  usage:["Union between two arrays in Java using HashSet class. In set theory, the union (denoted by U) of a collection of sets is the set of all elements in the collection. Use addAll() method to add the elements of the second array into set. Similarly, add all the elements of more arrays in the set.  Unsigned use unsigned ints for things like a game window width and height. Those two values should never be negative, because what's a window with a negative width or height? So in this case I'd typically use an unsigned int."]
},
{
  word:"Unsigned",
  def:"A C++ keyword used to declare an integral unsigned fundamental type.",
  usage:["Makes a variable only represent natural numbers (positive numbers and zero). It can be applied only to the char , short , int and long types."]
},
{
  word:"URL",
  def:"Uniform Resource Locator. A standard for writing a text reference to an arbitrary piece of data in the WWW.",
  usage:["To represent the addresses of resources."]
},
{
  word:"URN",
  def:"Uniform Resource Name. A unique identifier that identifies an entity, but doesn't tell where it is located. A system can use a URN to look up an entity locally before trying to find it on the Web. It also allows the Web location to change, while still allowing the entity to be found.",
  usage:["Used for various purposes (such as preserving the ashes of the dead after cremation) 2 : a closed vessel usually with a spigot for serving a hot beverage a coffee urn."]
},
{
  word:"User-Defined Conversion",
  def:"A member function that supports conversion from an object of class type to any target type.",
  usage:["Perform conversions between user-defined types, or between user-defined types and built-in types."]
},
{
  word:"Variable",
  def:"An object that can be assigned to.",
  usage:["Used to store data in a memory location, which can be modified or used in the program during program execution. Variables play a significant role in constructing a program, storing values in memory and dealing with them. Variables are required in various functions of every program."]
},
{
  word:"Vector",
  def:"A one-dimensional array.",
  usage:["Use a dynamically allocated array to store their elements. This array may need to be reallocated in order to grow in size when new elements are inserted, which implies allocating a new array and moving all elements to it. This is a relatively expensive task in terms of processing time, and thus, vectors do not reallocate each time an element is added to the container."]
},
{
  word:"Virtual Base Class",
  def:"A base class where a single subobject of the base class is shared by every derived class that declared the base class as virtual.",
  usage:["Used in virtual inheritance, is a way of preventing multiple instances of a given class appearing in an inheritance hierarchy when using multiple inheritance."]
},
{
  word:"Void",
  def:"A Java keyword used in method declarations to specify that the method does not return any value. void can also be used as a nonfunctional statement.",
  usage:["Used when you are creating a class that will not return any value. Java always needs to know what to expect. So if you will get a string after to perform the action you would need to label string, if you expect a number you would label int, double, or whatever type of number will come back."]
},
{
  word:"Volatile",
  def:"A Java keyword used in variable declarations that specifies that the variable is modified asynchronously by concurrently running threads.",
  usage:["Used to indicate that a variable's value will be modified by different threads. Declaring a volatile Java variable means: ... Access to the variable acts as though it is enclosed in a synchronized block, synchronized on itself."]
},
{
  word:"Web Server",
  def:"Software that provides services to access the Internet, an intranet, or an extranet. A Web server hosts Web sites, provides support for HTTP and other protocols, and executes server-side programs (such as CGI scripts or servlets) that perform certain functions.",
  usage:["Limit the speed of response to different clients so as to prevent a single client from dominating resources that are better used to satisfy requests from a large number of clients."]
},
{
  word:"Wchar_t",
  def:"C++ keyword to declare a fundamental type used for handling wide characters.",
  usage:["Used for Unicode UTF-16 strings. This is the native string encoding used by Win32 APIs."]
},
{
  word:"While ",
  def:"C++ keyword used to declare an iteration statement.",
  usage:["Use when we need to repeatedly execute a block of statements. C++ program to illustrate while loop."]
},
{
  word:"WWW",
  def:"World Wide Web. The web of systems and the data in them that is the Internet.",
  usage:["Used to refer instance variable of current class. It can be used to invoke or initiate current class constructor. It can be passed as an argument in the method call."]
},
{
  word:"XML",
  def:"Extensible Markup Language. A markup language that allows you to define the tags (markup) needed to identify the data and text in XML documents.",
  usage:["Used as a mode of communication between different applications. It is considered as a standard means to transport and store data."]
}



];

//fill the dictionary with words
init = function(){
  for (var i = 0; i < dictionary.length; i++) {
    document.getElementById('word_list').innerHTML += "<li onclick='show("+ i +")'>"+ dictionary[i].word + "</li>";
      }
  
}

//call the init function when page loads
init();

//display words, its definition and usage
show = function(i){
document.getElementById('word_text').innerHTML = dictionary[i].word;
document.getElementById('definition').innerHTML = dictionary[i].def;

var list = "";

for (var j = 0; j < dictionary[i].usage.length; j++) {                                                                         
  list += "<li>" + dictionary[i].usage[j] + "</li>";
  document.getElementById('usage').innerHTML = list;
 
}

}


//show first word in the dictionary when page loads
show(0);

//search functionality
 



search = function (){
  query = document.getElementById('search').value;

  if (query == ""){
    return;
  }

found = -1; //initialize found to false

for (var i = 0; i < dictionary.length; i++) {
 if (query.toLowerCase() == dictionary[i].word.toLowerCase()){
  found = i;
  break;
 } else {
  document.getElementById('word_text').innerHTML = "Word not found";
  document.getElementById('definition').innerHTML = "The term that you entered is not found on our list";
  document.getElementById('usage').innerHTML = "No usage found";
 }

}

if (found >= 0){
  show(found);
}

}


</script>


