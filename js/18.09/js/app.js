let txt = "JavaScript to świetny język. JavaScript jest popularny!";
console.log(txt.length);
console.log(txt.charAt(5) + " " + txt.charAt(12) + " " + txt.charAt(15));
console.log(
	txt.charCodeAt(1) + " " + txt.charCodeAt(5) + " " + txt.charCodeAt(11)
);
let txt1 = "Java";
let txt2 = "Script";
let txt3 = "jest";
let txt4 = "najlepszy";
let joinedTxt = txt1.concat(txt2, " ", txt3, " ", txt4);
console.log(joinedTxt);
console.log(txt.indexOf("Script") + " " + txt.lastIndexOf("Script"));
console.log(txt.slice(14, 21));
console.log(txt.substring(4, 10));
console.log(txt.substr(45, 7));
console.log(txt.endsWith("!"));
console.log(txt.toUpperCase());
let txt5 = "      Budul  ";
console.log(txt5.trim());
