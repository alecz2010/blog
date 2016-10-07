/**
 * Created by Tibor on 7/21/2016.
 */

describe('Simple object', function () {
	var cls = {
		a: function(){
			return Math.random();
		},
		b: function(){
			return 2 * this.a();
		}
	};

	it('can have 6 as value', function () {
		spyOn(cls, 'a').and.returnValues(1, 2, 3, 4, 5);

		expect(cls.b()).toBe(2);
		expect(cls.b()).toBe(4);
		expect(cls.b()).toBe(6);
		expect(cls.b()).toBe(8);
		expect(cls.b()).toBe(10);
	});
	it('can have 5 as value', function () {
		expect(5).toBe(5);
	});
	it('can have true as value', function () {
		expect(true).toBe(true);
	});
	it('can have 8 as value', function () {
		expect(8).toBe(8);
	});
});