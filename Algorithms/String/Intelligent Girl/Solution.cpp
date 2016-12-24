#include <iostream>
#include <algorithm> 
#include <string.h> 
 
#include <iterator>
using namespace std;
 //https://www.hackerearth.com/practice/algorithms/dynamic-programming/introduction-to-dynamic-programming-1/practice-problems/algorithm/intelligent-girl-1/
int main()
{
    string s;
    cin >> s;
    std::reverse(s.begin(), s.end());
    char* str = (char*)s.c_str();
 
    int arr [strlen(str)];
    if ((((int) *str) - 48) %2 == 0) 
    arr[0]=1;
    else arr[0]=0;
    int i =1;
    str++;
    while (*str) {
        if ((((int) *str) - 48) %2 == 0) {
        arr[i] = arr[i-1] + 1;
        } else { 
            arr[i] = arr[i-1];
        }
        i++;
        str++;
    }
 
    for (int j = i -1; j>=0; j--)
        cout <<arr[j] << ' ';
    return 0;
}
