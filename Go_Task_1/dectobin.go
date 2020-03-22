package main

import "fmt"

func main() {
	fmt.Println("Input a number")

	var num int

	fmt.Scan(&num)

	// fmt.Printf("num = %d, in binary format = %b\n", num, num)

	fmt.Printf("The binary format of %d is %b\n", num, num)

}
