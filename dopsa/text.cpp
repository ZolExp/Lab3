#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int is_let(char c) {
    if ((c >= 'a' && c <= 'z')||( c >='A'&& c <= 'Z') )
        return 1;
    else 
        return 0;
}

void wordflip(char* c, int i, unsigned int len) {
    char buf[len] = {0};
    for(int j = 0; j<len; j++)
        buf[j] = c[i+j];
    for(int j = 0; j<len; j++)
        c[i+j] = buf[len-1-j];
 //     
 printf()  
}



int main () {
int len1 = 100, check =1, i = 0;
char* c = (char*) malloc(len1), buf = 0, filename[7] = "in.txt";
FILE* f = fopen(filename, "rt");


check = fscanf(f, "%c", &buf); // перегоняем из файла в массив
while (check == 1) {
    c[i++] = buf;
    if (i == len1) {
        len1 *=2;
        c = (char*) realloc(c, len1);
    }
    check = fscanf(f, "%c", &buf);
}
len1 = i+1;
c = (char*) realloc(c, len1);

int len2 = 10, *tab2_i = (int*) malloc(4 * len2), *tab2_l = (int*) malloc(4*len2);
int j = 0, n = 0;

for (int k = 0; k < len1; k++) { //ищем нужные слова, запоминаем их индексы и длину
    if (k == 0 || is_let(c[k-1]) == 0) {
        j = k;
        while (is_let(c[j+1]) == 1)
            j++;
        if ((j != k)&&(c[j]==c[k])) {
            tab2_i[n] = k;
            tab2_l[n++] = j-k+1;
            if (n == len2) {
                len2*=2;
                tab2_i = (int*) realloc(tab2_i, 4*len2);
                tab2_l = (int*) realloc(tab2_l, 4*len2);
            }
        }
    }
}
len2 = n+1;
tab2_i = (int*) realloc(tab2_i, 4*len2);
tab2_l = (int*) realloc(tab2_l, 4*len2);



}
