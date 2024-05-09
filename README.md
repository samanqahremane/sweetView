This documentation provides a brief overview of the sweetView_Cls class, its properties, methods, and an example usage.

Class: sweetView_Cls

Description:
This is an example of a PHP class named `sweetView_Cls` that provides a sweet display of input arrays. 
In this class, we have a method called `sweetView` which accepts array values, a delimiter, and a separator as input and then displays the array in a sweet format to the user.

Properties:
- private array $sweetVal: Holds the array values.
- private string $sweetDelimiter: Holds the delimiter used in the display.
- private string $sweetSeparator: Holds the separator used in the display.

Methods:
- public function sweetView(array $sweetVal = [], string $sweetDelimiter = "", string $sweetSeparator = ""): 
  This method sets the values of the array, delimiter, and separator using the method's arguments and then displays the array in a sweet format to the user.

Example Usage:

// require_once ('sweetView.php');
// sweetViewHelper ($_SERVER, '▌', 'hr');
