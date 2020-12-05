#include <stdio.h>
#include <stdlib.h>
#include <math.h>

double EnergieInteraction (double x1, double y1, double x2, double y2)
{
    double x = x1 - x2, y = y1 - y2, r = sqrt(pow(x, 2) + pow(y, 2));
    const double sigma = 1;
    const double epsilon = 1;
    double EnergieInteraction = 4*epsilon*(pow((sigma/r),12)-pow((sigma/r),6));
    return EnergieInteraction;
}

int main (int argc, char *argv[])
{
    double u ;
    double x1, y1, x2, y2;
    double x = x1-x2, y = y1-y2;
    double r = sqrt(pow(x, 2) + pow(y, 2));
    printf("Entrer les abscisses des deux particules\n");
    scanf("%f%f", &x1, &x2);
    printf("La valeur de x est %f :\n", x);
    printf("Entrer les ordonnées des deux particules\n");
    scanf("%f%f", &y1, &y2);
    printf("La valeur de y est %f :\n", y);
    printf("La valeur de r est : %f\n", r);
    u = EnergieInteraction(x1, y1, x2, y2);
    printf("L'energie d'interaction entre les deux particules est egale a : %f\n", u);
    return u;
}
