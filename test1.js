const a = { id: 1, name: "竹さん", age: 30 };
const b = { id: 1, age: 35, hobby: "将棋" };

// 後ろのbがaを上書きする！
const merged = { ...a, ...b };

console.log(merged);