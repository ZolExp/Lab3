#include <stdio.h>
#include <ctype.h>
#include <string.h>

//void modifyarr(char* w);

void modifyarr(char* w)
    { // все кроме букв убираем в конце слова 
    int i = strlen(w), st = 0;
    char *ch = w;
    while(i)
    {
    if(isalpha(*(w + i)))
    break;
    i--;
    }
    *(w + i + 1) = '\0';
    ////////////////////////////////////////
    // все кроме букв убираем в начале слова 
    while(*w)
    {
    if(isalpha(*w)) st = 1;
    if(st)
    *(ch++) = *w ;
    w++;
    }
    *ch = '\0'; 
    }

void fileToArr(FILE* f, char* arr){
    //read file into array
    //int numberArray[16];
    //int i;

    for (int i = 0; i < 1000; i++)
    {
        fscanf(f, "%s", &arr[i]);
    }

    for (int i = 0; i < 1000; i++)
    {
        printf("Number is: %s\n\n", &arr[i]);
    }

}

int main()
{
    FILE * f;
    int start = 0;
    int end = 0;
    int leight = 0;
    char arr [50];
    char findarr[30] = "j";

    f = fopen ("test.txt" , "r");

    /*
    int in_arr = 0 , i = 0 , arr_count = 0;
    while ( s [i ] != 0) {
    if ( s [ i ] != ' ')
    in_arr = 1;
    else {
    if ( in_arr == 1)
    arr_count ++;
    in_arr = 0;
    }
    i ++;
    }
    if ( in_arr == 1)
    arr_count ++;
    */

   for (int i = 0; i < 50; i++)
    {
        fscanf(f, "%c", &arr[i]);
    }

    int x = 0;
   for (int i = 0; i < 50; i++)
    {
        if(arr[i] == 'j' && arr[i + 1] != ' '){
            start = i;
            while(arr[i + 1] != 'j'){
                printf("%c", arr[x]);
                leight++;
                // for (x = i; x < 50; x++){
                //     printf("%c", arr[x]);
                // }
            }
            //i = x;
        }
    }

    int main() { 
FILE* in = fopen("text.txt", "r"); 
if (in == NULL) { 
printf("Error"); 
exit(0); 
} 
char* buf = (char*)malloc(sizeof(char) * 10000); 
char* array = (char*)malloc(sizeof(char) * 10000); 
int k = 0; 
while (!feof) { 
array[k++] = fgetc(in); 
} 
array[k] = '\0'; 
k = 0; 
int i = 0, min = 100000; 

while (k != strlen(array) - 1) { 
    i = k + 1; 
        while (i + k != strlen(array)) { 
        if (array[k] == array[i]) { 
            if (min > i - k) { 
                min = i - k; 
            // записать слово новое в буфер 
            } 
            break; 
        } 
        else { 
            i++; 
        } 
    } 
} 
}

    // while (!feof(f))
    // {
    //     if(fscanf (f, "%s", arr)!= 1)
    //     {
    //     perror("File is empty");
    //     return -1;
    //     }
    //     modifyarr(arr);
        
    //     if(!strcmp(arr, "j"))
    //     {
    //     printf("%s\n", arr); st++;
    //     }
    // } 
    // if(!st) puts("The arr not found");
    // fclose (f);
}
    

    