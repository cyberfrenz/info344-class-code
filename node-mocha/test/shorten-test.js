'use strict';

var should = require('should');

var shorten = require("../lib/shorten");

describe('shorten',function() {
	it('should encode an id to a path', function() {
		var enc = shorten.encode(99999);
		should.exit(enc);
		enc.length.be.above(1000);
	});
	it('should decode a path back to the same id', function(){
		var id = 99999;
		shorten.decode(shorten.encode(id)).should.equal(id);
	}) 

	
});