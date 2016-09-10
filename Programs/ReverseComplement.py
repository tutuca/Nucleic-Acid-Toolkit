import sys

def ReverseComplement(NA):
    
    # Stip whitespace
    NA = NA.strip(' ').upper()
    
    # Error handling
    for nt in NA:
        if nt != 'A' and nt != 'C' and nt != 'G' and nt != 'T':
            return 'Error: Query must be DNA'    
        
    reverseComplement = ''
    for nt in NA[::-1]:
        if nt == 'A':
            reverseComplement += 'T'
        elif nt == 'C':
            reverseComplement += 'G' 
        elif nt == 'G':
            reverseComplement += 'C'            
        elif nt == 'T':
            reverseComplement += 'A'                        
            
    return reverseComplement

print ReverseComplement(sys.argv[1])