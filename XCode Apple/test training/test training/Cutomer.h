//
//  Cutomer.h
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "Address.h"
#import "PhoneNumber.h"

@interface Cutomer : NSObject

@property (strong,nonatomic) NSString *firstName;
@property (strong,nonatomic) NSString *lastName;
@property (nonatomic) int age;
@property (strong,nonatomic) Address *address;
@property (strong,nonatomic) NSMutableArray *arrayPhoneNumber;

-(id) init;
-(id) initWithFirstName:(NSString*)firstName andLastName:(NSString*)lastName;
-(void)addPhoneNumber:(PhoneNumber *)phoneNumber;

//NSArray-> array biasa ,predefined size
//NSMutableArray -> dynamic array

@end
