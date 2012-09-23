<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Online Compiler</title>
    <link rel='stylesheet' href='style.css' type='text/css' />
</head>

<body>
	<div id="wrapper">
		<h1><a href="index.php">Online Compiler</a></h1>
		<form id="code" action="#" method="post">
			<div>
				<label for="lang">Select Language:</label>
				<select name="lang" id="lang">
					<option value="7">Ada (gnat-4.3.2)</option>
					<option value="13">Assembler (nasm-2.07)</option>
					<option value="45">Assembler (gcc-4.3.4)</option>
					<option value="104">AWK (gawk) (gawk-3.1.6)</option>
					<option value="105">AWK (mawk) (mawk-1.3.3)</option>
					<option value="28">Bash (bash 4.0.35)</option>
					<option value="110">bc (bc-1.06.95)</option>
					<option value="12">Brainf**k (bff-1.0.3.1)</option>
					<option value="11">C (gcc-4.3.4)</option>
					<option value="27">C# (mono-2.8)</option>
					<option value="1" selected="selected">C++ (gcc-4.3.4)</option>
					<option value="44">C++0x (gcc-4.5.1)</option>
					<option value="34">C99 strict (gcc-4.3.4)</option>
					<option value="14">CLIPS (clips 6.24)</option>
					<option value="111">Clojure (clojure 1.1.0)</option>
					<option value="118">COBOL (open-cobol-1.0)</option>
					<option value="106">COBOL 85 (tinycobol-0.65.9)</option>
					<option value="32">Common Lisp (clisp) (clisp 2.47)</option>
					<option value="102">D (dmd) (dmd-2.042)</option>
					<option value="36">Erlang (erl-5.7.3)</option>
					<option value="124">F# (fsharp-2.0.0)</option>
					<option value="123">Factor (factor-0.93)</option>
					<option value="125">Falcon (falcon-0.9.6.6)</option>
					<option value="107">Forth (gforth-0.7.0)</option>
					<option value="5">Fortran (gfortran-4.3.4)</option>
					<option value="114">Go (gc-2010-07-14)</option>
					<option value="121">Groovy (groovy-1.7)</option>
					<option value="21">Haskell (ghc-6.8.2)</option>
					<option value="16">Icon (iconc 9.4.3)</option>
					<option value="9">Intercal (c-intercal 28.0-r1)</option>
					<option value="10">Java (sun-jdk-1.6.0.17)</option>
					<option value="35">JavaScript (rhino) (rhino-1.6.5)</option>
					<option value="112">JavaScript (spidermonkey) (spidermonkey-1.7)</option>
					<option value="26">Lua (luac 5.1.4)</option>
					<option value="30">Nemerle (ncc 0.9.3)</option>
					<option value="25">Nice (nicec 0.9.6)</option>
					<option value="122">Nimrod (nimrod-0.8.8)</option>
					<option value="43">Objective-C (gcc-4.5.1)</option>
					<option value="8">Ocaml (ocamlopt 3.10.2)</option>
					<option value="119">Oz (mozart-1.4.0)</option>
					<option value="22">Pascal (fpc) (fpc 2.2.0)</option>
					<option value="2">Pascal (gpc) (gpc 20070904)</option>
					<option value="3">Perl (perl 5.12.1)</option>
					<option value="54">Perl 6 (rakudo-2010.08)</option>
					<option value="29">PHP (php 5.2.11)</option>
					<option value="19">Pike (pike 7.6.86)</option>
					<option value="108">Prolog (gnu) (gprolog-1.3.1)</option>
					<option value="15">Prolog (swi) (swipl 5.6.64)</option>
					<option value="4">Python (python 2.6.4)</option>
					<option value="116">Python 3 (python-3.1.2)</option>
					<option value="117">R (R-2.11.1)</option>
					<option value="17">Ruby (ruby-1.9.2)</option>
					<option value="39">Scala (scala-2.8.0.final)</option>
					<option value="33">Scheme (guile) (guile 1.8.5)</option>
					<option value="23">Smalltalk (gst 3.1)</option>
					<option value="40">SQL (sqlite3-3.7.3)</option>
					<option value="38">Tcl (tclsh 8.5.7)</option>
					<option value="62">Text (text 6.10)</option>
					<option value="115">Unlambda (unlambda-2.0.0)</option>
					<option value="101">Visual Basic .NET (mono-2.4.2.3)</option>
					<option value="6">Whitespace (wspace 0.3)</option>
				</select>
			</div>
			
			<div>
				<label for="source">Source Code:</label>
				<textarea cols="40" rows="10" name="source" id="source"></textarea>
			</div>
			
			<div>
				<label for="input">Input: <span class="description">(Data that will be given to the program on the stdin.)</span></label>
				<textarea cols="40" rows="3" name="input" id="input"></textarea>
			</div>

			<div>
				<input type="submit" name="submit" value="Submit" />
			</div>
		</form>
		
		<div id="response">
			<div class="meta"></div>
			<div class="output"></div>
		</div>
		
		<div id="footer">
			Written by: <a href="http://tareq.wedevs.com">Tareq Hasan</a> <br> Using <a href="http://ideone.com">Ideone API</a> &copy;
by <a href="http://sphere-research.com">Sphere Research Labs</a>
		</div>
	</div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="script.js"></script>
<!-- <script src="../jquery/jquery-1.4.1.min.js"></script> -->

</body>
</html>
