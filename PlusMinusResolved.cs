using System.CodeDom.Compiler;
using System.Collections.Generic;
using System.Collections;
using System.ComponentModel;
using System.Diagnostics.CodeAnalysis;
using System.Globalization;
using System.IO;
using System.Linq;
using System.Reflection;
using System.Runtime.Serialization;
using System.Text.RegularExpressions;
using System.Text;
using System;

class Result
{
    public static int posi, neg, zero = 0;

    /*
     * Complete the 'plusMinus' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */

    public static void plusMinus(List<int> arr)
    {
        // I check that it is not sending an empty list 
        if (arr.Count() <= 0 ) {
			Console.Write("You have not sent any data please check it");
			return;
		};
		
        //Values are assigned to the variables, which represent the different values
		for (int i = 0; i < arr.Count(); i++){
		  if(arr[i] < 0){
			  neg++;
		  } else if (arr[i] > 0){
			  posi++;
		  } else {
			  zero++;
		  }
		}
	  	
        //Formatted to floating point
		double _posi = (double) posi/arr.Count();
		double _neg = (double) neg/arr.Count();
		double _zero = (double) zero/arr.Count();
		
        //Converts to 6-place decimals using ToString and print
        Console.Write(_posi.ToString("0.000000")+"\n");
		Console.Write(_neg.ToString("0.000000")+"\n");
		Console.Write(_zero.ToString("0.000000")+"\n");
    }

}

class Solution
{
    public static void Main(string[] args)
    {
        int n = Convert.ToInt32(Console.ReadLine().Trim());

        List<int> arr = Console.ReadLine().TrimEnd().Split(' ').ToList().Select(arrTemp => Convert.ToInt32(arrTemp)).ToList();

        Result.plusMinus(arr);
    }
}
