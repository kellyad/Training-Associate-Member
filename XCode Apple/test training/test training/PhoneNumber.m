//
//  PhoneNumber.m
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import "PhoneNumber.h"

@implementation PhoneNumber

-(id)initWithType:(NSString *)type andPhoneNumber:(NSString *)phoneNumber{
    //NSString *a =[[NSString alloc]init ]biar return ke *a lagi
    self.type=type;
    self.phoneNumber= phoneNumber;
    return self;
}

@end
