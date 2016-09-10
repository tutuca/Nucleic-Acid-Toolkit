import sys

def Count(NA):
    
    # Stip whitespace
    NA = NA.strip(' ').upper()
    
    A = str(NA.count('A'))
    C = str(NA.count('C'))
    G = str(NA.count('G'))
    T = str(NA.count('T'))
    U = str(NA.count('U'))

    spacex5 = ('&nbsp')*5
    spacex2 = ('&nbsp')*2
    output = 'A:'+spacex2+A+spacex5+'C:'+spacex2+C+spacex5+'G:'+spacex2+G+spacex5+'T:'+spacex2+T+spacex5+'U:'+spacex2+U

    return output

print Count(sys.argv[1])