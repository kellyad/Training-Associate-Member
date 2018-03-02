//
//  Cutomer.m
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import "Cutomer.h"

@implementation Cutomer

-(id)init
{
    self.arrayPhoneNumber=[[NSMutableArray alloc]init];
    return self;
}

-(id)initWithFirstName:(NSString *)firstName andLastName:(NSString *)lastName
{
    self.arrayPhoneNumber=[[NSMutableArray alloc]init];
    self.firstName= firstName;
    self.lastName= lastName;
    return self;
}
-(void)addPhoneNumber:(PhoneNumber *)phoneNumber
{
    [self.arrayPhoneNumber addObject:phoneNumber];
}@end
