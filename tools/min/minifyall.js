//js
var fs = require('fs');
var UglifyJS = require("uglify-js");

 
function jsMinifier(fileIn, fileOut, fileDir) {
		 if(!fileDir) fileDir = "./js/";
     var fileIn=Array.isArray(fileIn)? fileIn : [fileIn];
     var origCode,finalCode='';
     for(var i=0; i<fileIn.length; i++) {
        fileIn[i] = fileDir+fileIn[i];        
     }
     finalCode = UglifyJS.minify(fileIn).code;
    fs.writeFileSync(fileOut, finalCode, 'utf8');
}

//css
var CleanCSS = require('clean-css');
 
function cssMinifier(flieIn, fileOut,fileDir) {
		if(!fileDir) fileDir = "./css/";
     var flieIn=Array.isArray(flieIn)? flieIn : [flieIn];
     var origCode,finalCode='';
     for(var i=0; i<flieIn.length; i++) {
        origCode = fs.readFileSync(fileDir+flieIn[i], 'utf8');
        finalCode += new CleanCSS().minify(origCode).styles;//cleanCSS.process(origCode); 
     }
    fs.writeFileSync(fileOut, finalCode, 'utf8');
}
  

//Í¼Æ¬
var imgMinifier = require('node-smushit');


jsMinifier(['jquery.js','jquery.mobile-1.4.5.js'], './all-min.js','../../www/js/'); //ºÏ²¢Ñ¹Ëõ
cssMinifier(['jquery.mobile.external-png-1.4.5.css'], './all-min.css','../../www/css/');
//imgMinifier.smushit('./images', {recursive: true}); //µÝ¹é
//imgMinifier.smushit('./css/images', {recursive: true}); //µÝ¹é
//imgMinifier.smushit('./file-src/images');