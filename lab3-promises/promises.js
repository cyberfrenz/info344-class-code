'use strict';

var num = 5;

function add2(x) {
	var promise = new Promise(function(resolve, reject) {
		if (x != null) {
			resolve(x);
		} else {
			reject(x);
		}
	promise.then(function(x) {
		console.log(x);
		return x + 2;
	})
	.then(function(x){
		return num + 1;
	})
	.then(function(x) {
		console.log(x);
	})
	.catch
	})}
	
	add2(num);