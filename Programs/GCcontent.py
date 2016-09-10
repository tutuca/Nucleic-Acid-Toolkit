import sys

def Count(NA):
    
    # Stip whitespace
    NA = NA.strip(' ').upper()

    # Error handling
    for nt in NA:
        if nt != 'A' and nt != 'C' and nt != 'G' and nt != 'T' and nt != 'U':
            return 'Error: Query must be DNA or RNA!'    
        
    gc = round(100*(NA.count('G')+NA.count('C'))/len(NA))
    spacex2 = ('&nbsp')*2
    output = 'GC Content:'+spacex2+str(gc)+'%'

    return output

print Count(sys.argv[1])