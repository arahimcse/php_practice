<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This section is for Magic Constant Section</title>
</head>
<body>
   <h1></h1>
   <p>
   __LINE__	The current line number of the file.</p>
   
   <p>__FILE__	The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.</p>

   <p>
   __DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
   </p>

   <p>
   __FUNCTION__	The function name, or {closure} for anonymous functions.
   </p>

   <p>
   __CLASS__	The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
   </p>

   <p>
   __TRAIT__	The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
   </p>

   <p>
   __METHOD__	The class method name.
   </p>

   <p>
   __NAMESPACE__	The name of the current namespace.
   </p>

   <p>
   ClassName::class	The fully qualified class name.
   </p>
</body>
</html>